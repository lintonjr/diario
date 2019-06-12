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


class EditorService
{
    public function index()
    {
        return Theme::whereNull('deleted_at')->get();
    }

    public function store($request)
    {
        $create = Theme::createCustom($request->all());
        if(isset($request->repeat)){
            foreach($request->repeat as $repeat){
                $create->dailySync()->attach($repeat);
            }
        }
    }

    public function show($id)
    {
        return Theme::find($id);
    }

    public function edit($id)
    {
        return Theme::where('id', $id)->first();
    }

    public function replicate($id, $request)
    {
        Theme::updateCustom($id, $request->all());
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
            return Section::where('client_id', $authUser->clients()->first()->id)->get();

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
        $view = 'editors';
        if ($authUser->roles->first()->name == "Editor") {
            $returns = Theme::with(['agency', 'daily'])->select(DB::raw('themes.*, dailies.id AS dailyId, dailies.date_released AS daily_date, clients.id as ClientId'))
            ->leftJoin('dailies', 'themes.daily_id', '=', 'dailies.id')->where('dailies.date_released', '>=', $now)
            ->leftJoin('clients', 'dailies.client_id', '=', 'clients.id')->where('clients.id', '=', $authUser->clients->first()->id)
            ->where('status', '=', 'Aguardando Aprovação');
        } else {
            $returns = Theme::with(['agency', 'daily'])->select(DB::raw('themes.*, dailies.id AS dailyId, dailies.date_released AS daily_date'))
            ->leftJoin('dailies', 'themes.daily_id', '=', 'dailies.id')
            ->where('status', '=', 'Aguardando Aprovação');
        }

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $edit =  route($view.'.edit',$return->id);
                $show =  route($view.'.show',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$show}' title='Aprovar/Desaprovar' ><li class='bqX' data-tooltip='Aprovar/Desaprovar'><i class='mdi mdi-lock'></i></li></a>";
            })
            ->editColumn('daily.date_released', function ($return){
                return \Helper::formatDate($return->daily->date_released);
            })
            ->make(true);
    }
}
