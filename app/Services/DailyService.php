<?php

namespace App\Services;

use App\Models\Administrative\Calendar;
use App\Models\Administrative\Daily;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;

class DailyService
{

    public function store($request)
    {
        $dataIni = \Helper::convertDate(substr($request['date'], 0, 10));
        $begin = \Helper::proximoDiaUtil($dataIni);
        $dataFin = \Helper::convertDate(substr($request['date'], 13, 10));
        $end = \Helper::proximoDiaUtil($dataFin);
        $dates = \Helper::dateRange($begin, $end);
        DB::beginTransaction();
            $number = $request['number'];
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
                            $data['number'] = $number;
                            $data['date_released'] = \Helper::proximoDiaUtil($date);
                            $data['year'] = $request['year'];
                            $create = Daily::createCustom($data);
                            $number++;
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
        return Daily::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Daily::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'dailies';
        $returns = Daily::with('client')->select('dailies.*');

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-pencil'></i></li></a>
                        <a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->editColumn('date_released', function ($return){
                return \Helper::formatDate($return->date_released);
            })
            ->make(true);
    }
}
