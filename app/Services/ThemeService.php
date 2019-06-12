<?php

namespace App\Services;

use App\Models\Operational\Theme;
use App\Models\Management\Agency;
use App\Models\Administrative\Section;
use App\Models\Administrative\Daily;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;
use Auth;
use DOMDocument;
use Purifier;

class ThemeService
{
    private function strip_word_html($text, $allowed_tags = '<b><i><sup><sub><em><strong><u><br>')
    {
        mb_regex_encoding('UTF-8');
        //replace MS special characters first
        $search = array('/&lsquo;/u', '/&rsquo;/u', '/&ldquo;/u', '/&rdquo;/u', '/&mdash;/u');
        $replace = array('\'', '\'', '"', '"', '-');
        $text = preg_replace($search, $replace, $text);
        //make sure _all_ html entities are converted to the plain ascii equivalents - it appears
        //in some MS headers, some html entities are encoded and some aren't
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
        //try to strip out any C style comments first, since these, embedded in html comments, seem to
        //prevent strip_tags from removing html comments (MS Word introduced combination)
        if(mb_stripos($text, '/*') !== FALSE){
            $text = mb_eregi_replace('#/\*.*?\*/#s', '', $text, 'm');
        }
        //introduce a space into any arithmetic expressions that could be caught by strip_tags so that they won't be
        //'<1' becomes '< 1'(note: somewhat application specific)
        $text = preg_replace(array('/<([0-9]+)/'), array('< $1'), $text);
        $text = strip_tags($text, $allowed_tags);
        
        //eliminate extraneous whitespace from start and end of line, or anywhere there are two or more spaces, convert it to one
        $text = preg_replace(array('/^\s\s+/', '/\s\s+$/', '/\s\s+/u'), array('', '', ' '), $text);
        
        //strip out inline css and simplify style tags
        $search = array('#<(strong|b)[^>]*>(.*?)</(strong|b)>#isu', '#<(em|i)[^>]*>(.*?)</(em|i)>#isu', '#<u[^>]*>(.*?)</u>#isu');
        $replace = array('<b>$2</b>', '<i>$2</i>', '<u>$1</u>');
        $text = preg_replace($search, $replace, $text);
        //on some of the ?newer MS Word exports, where you get conditionals of the form 'if gte mso 9', etc., it appears
        //that whatever is in one of the html comments prevents strip_tags from eradicating the html comment that contains
        //some MS Style Definitions - this last bit gets rid of any leftover comments */
        $num_matches = preg_match_all("/\<!--/u", $text, $matches);
        if($num_matches){
              $text = preg_replace('/\<!--(.)*--\>/isu', '', $text);
        }
        return $text;
    }
    

    private function stripUnwantedTagsAndAttrs($html_str)
    {
        $xml = new DOMDocument();
        //Suppress warnings: proper error handling is beyond scope of example
        libxml_use_internal_errors(true);
        //List the tags you want to allow here, NOTE you MUST allow html and body otherwise entire string will be cleared
        $allowed_tags = array("html", "body", "b", "br", "em", "hr", "i", "li", "ol", "p", "s", "span", "table", "tr", "td", "u", "ul");
        //List the attributes you want to allow here
        $allowed_attrs = array ("class", "id", "style");
        if (!strlen($html_str)){
            return false;
        }
        
        if ($xml->loadHTML($html_str, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD)){
            foreach ($xml->getElementsByTagName("*") as $tag){
                if (!in_array($tag->tagName, $allowed_tags)){
                    $tag->parentNode->removeChild($tag);
                }else{
                    foreach ($tag->attributes as $attr){
                        if (!in_array($attr->nodeName, $allowed_attrs)){
                            $tag->removeAttribute($attr->nodeName);
                        }
                    }
                }
            }
        }
        return $xml->saveHTML();
    }
      
    public function index()
    {
        return Theme::whereNull('deleted_at')->get();
    }

    public function store($request)
    {
        $textContent = $request['content'];

        $textContent = str_replace('<div>b></div>', '<br>', $textContent);

        //$textContent = Purifier::clean($textContent);

        // $textContent = str_replace('<strong>', '<b>', $textContent);
        // $textContent = str_replace('</strong>', '</b>', $textContent);

        // $textContent = str_replace('<em>', '<i>', $textContent);
        // $textContent = str_replace('</em>', '</i>', $textContent);




        //$textContent = preg_replace('(mso-[a-z\-: ]+; )i', '', $textContent);

        //$textContent = $this->strip_word_html($textContent);

        //$textContent = preg_replace('/<(.*)style=".*"( ?)(.*)>/','<$1{1},$3>',$textContent);
        //$textContent = nl2br(strip_tags($textContent));

        //$textContent =  preg_replace('/(class=\"?Mso|style=\"[^\"]*\bmso\-|w:WordDocument)/', '', $textContent);

        //$textContent =  $this->stripUnwantedTagsAndAttrs($textContent);

        //$textContent =  preg_replace('/<span\\s?style="font-family\\s?:\\s?([^;]*);\\sfont-size\\s?:\\s?([^"]*)">(.*?)<\\/span>/ims', '$3', stripslashes($textContent));

                
        $request['content'] = $textContent;

        $create = Theme::createCustom($request->all());
        if(isset($request->repeat)){
            foreach($request->repeat as $repeat){
                $create->dailySync()->attach($repeat);
            }
        }
    }

    public function edit($id)
    {
        $authUser = Auth::user();
        if ($authUser->roles->first()->name == "Operador") {
            $theme = Theme::where('user_created', $authUser->id)->where('id', $id)->first();
            if ($theme) {
                return Theme::where('user_created', $authUser->id)->where('id', $id)->first();
            }
            else {
                abort(403, 'Erro na Operação!');
            }
        } else {
            return Theme::where('id', $id)->first();
        }
        
    }

    public function update($id, $request)
    {
        Theme::updateCustom($id, ['deleted_at' => Carbon::now()]);
        $create = Theme::createCustom($request->all());
        if(isset($request->repeat)){
            foreach($request->repeat as $repeat){
                $create->dailySync()->sync($repeat);
            }
        }
    }

    public function delete($id)
    {
        Theme::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function themeAgencies()
    {
        $authUser = Auth::user();
        if ($authUser->roles->first()->name == "Operador") {
            return Agency::select(DB::raw('agencies.*', 'agency_user.users.id as users_id'))
            ->leftJoin('agency_user', 'agencies.id', '=', 'agency_user.agency_id')->where('agency_user.user_id', '=', $authUser->id)->get();
        } elseif ($authUser->roles->first()->name == "Gestor da Entidade") {
            return Agency::select(DB::raw('agencies.*, entities.id as entities_id'))
            ->leftJoin('entities', 'agencies.entity_id', '=', 'entities.id')->where('entities.id', '=', $authUser->entity_id)->get();
        } else {
            return Agency::whereNull('deleted_at')->get();
        }
    }

    public function themeSections()
    {
        $authUser = Auth::user();
        if ($authUser->roles->first()->name == "Operador" || $authUser->roles->first()->name == "Gestor da Entidade") {
           $sections = Section::with('entities')->select(DB::raw('sections.*', 'entity_section.section_id as section_id'))
                        ->leftJoin('entity_section', 'sections.id', '=', 'entity_section.section_id')->where('entity_section.entity_id', '=', $authUser->entities->id)->where('client_id', $authUser->clients()->first()->id)->get();
            return $sections;
        } else {
            return Section::whereNull('deleted_at')->get();
        }
    }

    public function themeDailies()
    {
        $now = Carbon::now();
        $authUser = Auth::user();
        if ($authUser->roles->first()->name == "Operador" || $authUser->roles->first()->name == "Gestor da Entidade") {
            return Daily::where('date_released', '>=', $now)
                ->where('client_id', '=', $authUser->clients()->first()->id)
                ->whereNull('deleted_at')
                ->limit(2)->orderBy('date_released')->get();
        } else {
            return Daily::where('date_released', '>=', $now)
                                ->whereNull('deleted_at')
                                    ->limit(2)->orderBy('date_released')->get();
        }
    }

    public function themeDailiesRepeat()
    {
        $now = Carbon::now();
        $authUser = Auth::user();
        if ($authUser->roles->first()->name == "Operador" || $authUser->roles->first()->name == "Gestor da Entidade") {
            return Daily::where('date_released', '>', $now)
                ->where('client_id', '=', $authUser->clients()
                ->first()->id)
                ->whereNull('deleted_at')->get();
        } else {
            return Daily::where('date_released', '>', $now)
                ->whereNull('deleted_at')->get();
        }
    }

    public function years()
    {
        return [
                '1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004',
                '2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015','2016',
                '2017','2018','2019','2020','2021','2022','2023','2024','2025','2026','2027','2028',
                '2029','2030','2031','2032','2033','2034','2035','2036','2037','2038','2039','2040'
                ];
    }

    public function getData()
    {
        $authUser = Auth::user();
        $now = Carbon::now();
        $view = 'themes';
        if ($authUser->roles->first()->name == "Operador") {
            $returns = Theme::with(['agency', 'daily'])->select(DB::raw('themes.*, dailies.id AS dailyId, dailies.date_released AS daily_date'))
            ->leftJoin('dailies', 'themes.daily_id', '=', 'dailies.id')->where('dailies.date_released', '>=', $now)
            ->where('status', '!=', 'Aprovado')
            ->whereNotNull('content')
            ->where('user_created', $authUser->id);
        } elseif ($authUser->roles->first()->name == "Gestor da Entidade") {
            $returns = Theme::with(['agency', 'daily'])->select(DB::raw('themes.*, dailies.id AS dailyId, dailies.date_released AS daily_date, agencies.id AS agencyId, agencies.name AS agency_name, entities.id as entity_id, entities.name as nameEntity'))
            ->leftJoin('dailies', 'themes.daily_id', '=', 'dailies.id')->where('dailies.date_released', '>=', $now)
            ->leftJoin('agencies', 'themes.agency_id', '=', 'agencies.id')
            ->leftJoin('entities', 'agencies.entity_id' , '=', 'entities.id')
            ->where('status', '!=', 'Aprovado')
            ->where('entities.id', $authUser->entities->id)
            ->whereNotNull('content');
        } else {
            $returns = Theme::with(['agency', 'daily'])->select(DB::raw('themes.*, dailies.id AS dailyId, dailies.date_released AS daily_date'))
            ->leftJoin('dailies', 'themes.daily_id', '=', 'dailies.id')->where('dailies.date_released', '>=', $now)
            ->where('status', '!=', 'Aprovado')
            ->whereNotNull('content');
        }

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-pencil'></i></li></a>
                        <a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->editColumn('daily.date_released', function ($return){
                return \Helper::formatDate($return->daily->date_released);
            })
            ->make(true);
    }
}
