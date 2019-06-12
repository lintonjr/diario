<?php

namespace App\Http\Controllers\Operational;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operational\Theme;
use App\Models\Administrative\Daily;
use App\Models\Administrative\Section;
use App\Models\Administrative\Type;
use App\Models\Administrative\Subtype;
use App\Models\Administrative\Competence;
use App\Models\Administrative\Layout;
use App\Models\Administrative\Status;
use App\Models\Management\Agency;
use App\Services\ThemeuploadService;
use App\Services\SubtypeService;
use App\Services\TypeService;
use App\Services\CompetenceService;
use App\Services\LayoutService;
use Response;
use Carbon\Carbon;

class ThemeuploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $ctrl = array(
        "name"      => "Publicação de arquivo",
        "route"     => "themefiles",
        "title"     => "Publicações de Arquivos",
        "errors"    => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(
        ThemeuploadService $ThemeuploadService,
        TypeService $typeService,
        SubtypeService $subtypeService,
        CompetenceService $competenceService,
        LayoutService $layoutService
    )
    {
         $this->service = $ThemeuploadService;
         $this->typeService = $typeService;
         $this->subtypeService = $subtypeService;
         $this->competenceService = $competenceService;
         $this->layoutService = $layoutService;
    }

    public function index()
    {
        $ctrl = $this->ctrl;

        return view('diario.'.$ctrl['route'].'.index', compact('ctrl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Theme $item)
    {
        $ctrl = $this->ctrl;

        $dailies = $this->service->themeDailies();
        if (count($dailies)>0)  {

            $now = Carbon::now();
            $hour = '18:00:00';
            $agencies = $this->service->themeAgencies();
            $sections = $this->service->themeSections();
            $dailiesRepeat = $this->service->themeDailiesRepeat();
            $years = $this->service->years();

            if($now->toTimeString() > $hour){
                $daily = $dailies[1];
            } else {
                $daily = $dailies[0];
            }

            if($now->toTimeString() > $hour){
                $dateDaily = $now->addDays(1);
            } else {
                $dateDaily = $now;
            }

            $types          = $this->typeService->index();
            $subtypes       = $this->subtypeService->index();
            $competences    = $this->competenceService->index();
            $layouts        = $this->layoutService->index();
            return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item', 'daily', 'dateDaily', 'sections',
                'agencies', 'types', 'subtypes', 'layouts', 'competences', 'dailiesRepeat', 'years'));
        } else {
            return redirect()->to('/diario/'.$ctrl['route'])->with('error', 'Diário não Localizado!');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ctrl = $this->ctrl;

        $this->service->store($request);
        return redirect()->to('/diario/'.$ctrl['route'])->with('success', 'Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ctrl = $this->ctrl;

        $item = Theme::find($id);
        return view('diario.'.$ctrl['route'].'.show', compact('ctrl', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ctrl = $this->ctrl;

        $now = Carbon::now();
        $hour = '18:00:00';
        $users = \Auth::user();
        $clients = $users->clients()->get();
        $roles = $users->roles()->get();
        $agencyUsers = $users->agencies()->get();
        $years = [
            '1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004',
            '2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015','2016',
            '2017','2018','2019','2020','2021','2022','2023','2024','2025','2026','2027','2028',
            '2029','2030','2031','2032','2033','2034','2035','2036','2037','2038','2039','2040'
        ];

        foreach($roles as $role){
            $role = $role;
        }

        foreach($clients as $client){
            $clientId = $client->id;
        }

        foreach($agencyUsers as $agency){
            $agency = $agency;
        }

        if($role->name == "Operador"){
            $agencies = Agency::where('id', $agency->id)->get();
        } else {
            $agencies   = Agency::all();
        }

        if($role->name == "Operador" || $role->name == "Gestor da Entidade"){
            $dailies = Daily::where('date_released', '>=', $now)
                ->where('client_id', '=', $clientId)
                    ->limit(2)->orderBy('date_released')->get();
            $dailiesRepeat = Daily::where('date_released', '>', $now)->where('client_id', '=', $clientId)->get();
        } else {
            $dailies = Daily::where('date_released', '>=', $now)
                    ->limit(2)->orderBy('date_released')->get();
            $dailiesRepeat = Daily::where('date_released', '>', $now)->get();
        }


        if($now->toTimeString() > $hour){
            $daily = $dailies[1];
        } else {
            $daily = $dailies[0];
        }

        if($now->toTimeString() > $hour){
            $dateDaily = $now->addDays(1);
        } else {
            $dateDaily = $now;
        }

        $item = Theme::where('id', $id)->first();
        $sections   = Section::all();
        $types      = Type::all();
        $subtypes   = Subtype::all();
        $competences = Competence::all();
        $layouts    = Layout::all();
        $statuses   = Status::all();
        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item', 'daily', 'dateDaily', 'sections',
            'agencies', 'types', 'subtypes', 'layouts', 'statuses', 'competences', 'dailiesRepeat', 'years'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $cli = \Auth::user()->clients()->first()->id;
        // $this->validate($request, [
        //     'file' => 'required|mimes:png,pdf,jpeg,jpg,bmp,doc,docx,xls,xlsx'
        // ]);
        // $file = $request->file('file');
        // $ext = $file->getClientOriginalExtension();
        // $d = date('YmdHis');
        // $upload_success = $file->storeAs('public/clients/'.$cli.'/files'.$request->id, 'theme'.$d.'.'.$ext);
        // $file = 'storage/clients/'.$cli.'/files'.$request->id.'/theme'.$d.'.'.$ext;
        // $data = $request->all();
        // $data['file'] = $file;

        // if($upload_success) {
        //     $request->file = $file;
        //     $resp = Theme::updateCustom($id, $data);
        //     $updatePivot = Theme::find($id);
        //     $updatePivot->dailySync()->get();

        //     if($resp){
        //         if(!empty($request->repeat)){
        //             foreach($request->repeat as $repeat){
        //                 $updatePivot->dailySync()->sync($repeat);
        //             }
        //         }
        //         return "Cadastrado com sucesso.";
        //     }
        // }

        $ctrl = $this->ctrl;

        $this->service->update($id, $request);
        return redirect()->to('/diario/'.$ctrl['route'])->with('success', 'Editado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Theme::updateCustom($id, ['deleted_at' => Carbon::now()]);
        return "Orgão deletado com sucesso!";
    }

    public function getData()
    {
        $datatable = $this->service->getData();
        return $datatable;
    }

    public function types($id)
    {
        if(!empty($id)){
            $types = Type::where('section_id', $id)->get();
            return Response::json($types);
        }
        return [];
    }

    public function subtypes($id)
    {
        if(!empty($id)){
            $subtypes = Subtype::where('type_id', $id)->get();
            return Response::json($subtypes);
        }
        return [];
    }
}
