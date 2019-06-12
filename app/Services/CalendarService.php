<?php

namespace App\Services;

use App\Models\Administrative\Calendar;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class CalendarService
{

    public function store($request)
    {
        $data['client_id'] = $request['client_id'];
        $data['description'] = $request['description'];
        $data['date'] = \Helper::convertDate($request['date']);
        $data['permanent'] = $request['permanent'] == 'on' ? 1 : 0;

        Calendar::createCustom($data);
    }

    public function edit($id)
    {
        return Calendar::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $data['client_id'] = $request['client_id'];
        $data['description'] = $request['description'];
        $data['date'] = \Helper::convertDate($request['date']);
        $data['permanent'] = $request['permanent'] == 'on' ? 1 : 0;

        Calendar::updateCustom($id, $data);
    }

    public function delete($id)
    {
        Calendar::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'calendars';
        $returns = Calendar::with('client')->select('calendars.*');

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-pencil'></i></li></a>
                        <a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->editColumn('date', function ($return){
                return \Helper::formatDate($return->date);
            })
            ->make(true);
    }
}
