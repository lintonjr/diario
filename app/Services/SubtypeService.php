<?php

namespace App\Services;

use App\Models\Administrative\Subtype;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class SubtypeService
{

    public function index()
    {
        return Subtype::whereNull('deleted_at')->get();
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:subtypes,name,NULL,id,type_id,'.$request->type_id
        ],[
            'name.unique' => 'Subtipo já cadastrado para este Tipo'
        ]);
        Subtype::createCustom($request->all());
    }

    public function edit($id)
    {
        return Subtype::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:subtypes,name,'.$id.',id,type_id,'.$request->type_id
        ],[
            'name.unique' => 'Subtipo já cadastrado para este Tipo'
        ]);
        Subtype::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Subtype::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'subtypes';
        $returns = Subtype::with('type')->select('subtypes.*');

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
