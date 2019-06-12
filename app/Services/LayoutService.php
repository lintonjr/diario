<?php

namespace App\Services;

use App\Models\Administrative\Layout;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;


class LayoutService
{
    public function index()
    {
        return Layout::whereNull('deleted_at')->get();
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:layouts'
        ],[
            'name.unique' => 'Layout Já cadastrado'
        ]);
        Layout::createCustom($request->all());
    }

    public function edit($id)
    {
        return Layout::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:layouts,name,'.$id
        ],[
            'name.unique' => 'Layout Já cadastrado'
        ]);
        Layout::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Layout::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'layout';
        $returns = Layout::with(['layoutPattern'])->select('layouts.*');

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-pencil'></i></li></a>
                        <a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->make(true);
    }
}
