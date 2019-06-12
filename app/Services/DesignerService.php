<?php

namespace App\Services;

use App\Models\Administrative\Calendar;
use App\Models\Administrative\Daily;
use App\Models\Operational\Theme;
use App\User;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;
use Auth;

class DesignerService
{
    public function indexThemes()
    {
        Theme::all();
    }

    public function store($request)
    {
        $dataIni = \Helper::convertDate(substr($request['date'], 0, 10));
        $begin = \Helper::proximoDiaUtil($dataIni);
        $dataFin = \Helper::convertDate(substr($request['date'], 13, 10));
        $end = \Helper::proximoDiaUtil($dataFin);
        $dates = \Helper::dateRange($begin, $end);
        DB::beginTransaction();

            foreach ($dates as $date)
            {
                $dailies = Daily::where('date_released', $date)->where('client_id', $request['client_id'])->exists();
                if($dailies == null){
                    $calendar = Calendar::where('client_id', '=', $request['client_id'])
                        ->where('permanent', '=', 0)
                            ->whereDate('date', '=', $date)
                                ->orWhere(DB::raw("SUBSTRING(date, 6,5)"), substr($date, 5, 5))
                                    ->where('permanent', '=', 1)->exists();
                    if($calendar == null){
                        if($date == \Helper::proximoDiaUtil($date)){
                            $data['client_id'] = $request['client_id'];
                            $data['description'] = $request['description'];
                            $data['number'] = $request['number'];
                            $data['date_released'] = \Helper::proximoDiaUtil($date);
                            $data['year'] = $request['year'];
                            $create = Daily::createCustom($data);
                        }
                    }
                }
            }


            if( isset($create) ) {
                DB::commit();
            } else {
                DB::rollBack();
            }
    }

    public function edit($id)
    {
        return Daily::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        return Daily::updateCustom($id, $request);
    }

    public function delete($id)
    {
        Daily::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $now = Carbon::now();
        $authUser = Auth::user();
        $view = 'designers';
        $returns = Daily::with('client')->select('dailies.*')
        ->where('date_released', '>=', $now)
        ->where('client_id', '=', $authUser->clients->first()->id);


        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $relation =  route($view.'.themes',$return->id);
                $showthemes =  route($view.'.dailythemes',$return->id);
                $downloadthemes =  route($view.'.downloadthemespdf',$return->id);
                $downloadpdfdaily =  route($view.'.downloadpdfdaily',$return->id);
                //$edit =  route($view.'.edit',$return->id);
                //$destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$relation}' title='Publicações' ><li class='bqX' data-tooltip='Publicações'><i class='mdi mdi-eye'></i></li></a>
                            <a href='{$showthemes}' title='Publicações' target='_blank'><li class='bqX' data-tooltip='Publicações'><i class='mdi mdi-language-html5'></i></li></a>
                            <a href='{$downloadpdfdaily}' title='Download do Diário' ><li class='bqX' data-tooltip='Download do Diário'><i class='mdi mdi-file-pdf-box'></i></li></a>";
            })
            ->editColumn('date_released', function ($return){
                return \Helper::formatDate($return->date_released);
            })
            ->make(true);
            //<a href='{$downloadthemes}' title='Download de Publicaçoes' ><li class='bqX' data-tooltip='Download de Publicações'><i class='mdi mdi-file-pdf'></i></li></a>
    }

    public function getRelation($id)
    {
        $view = 'designers';
        $returns = Theme::with(['daily', 'layout', 'section'])->where('daily_id', $id)->whereNotNull('user_accepted')->get();

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view, $id) {
                $show =  route($view.'.show', $return->id);
                //$file = url($return->file);
                /*
                if($return->file != null){
                    return "&emsp;<a href='{$file}' download target='_blank' class='bqX'><i class='mdi mdi-link'></i></a>";
                }
                */
                return "&emsp;<a href='{$show}' class='bqX'><i class='mdi mdi-link'></i></a>";
            })
            ->editColumn('user_accepted', function($return){
                return User::where('id', $return->user_accepted)->first()->name;
            })
            ->editColumn('daily.date_released', function($return){
                return \Helper::formatDate($return->daily->date_released);
            })
            ->editColumn('diagrammed_by', function($return){
                if($return->diagrammed_by != null){
                    return \Helper::formatDate($return->diagrammed_by);
                }
            })
            ->make(true);
    }
}
