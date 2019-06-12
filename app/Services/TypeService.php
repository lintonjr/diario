<?php

namespace App\Services;

use App\Models\Administrative\Type;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class TypeService
{
    public function index()
    {
        return Type::whereNull('deleted_at')->get();
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:types,name,NULL,id,section_id,'.$request->section_id
        ],[
            'name.unique' => 'Tipo já cadastrado para este caderno'
        ]);
        Type::createCustom($request->all());
    }

    public function edit($id)
    {
        return Type::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:types,name,'.$id.',id,section_id,'.$request->section_id
        ],[
            'name.unique' => 'Tipo já cadastrado para este caderno'
        ]);
        Type::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Type::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'types';
        $returns = Type::with('section')->select('types.*');

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
