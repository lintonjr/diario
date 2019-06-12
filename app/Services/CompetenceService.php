<?php

namespace App\Services;

use App\Models\Administrative\Competence;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class CompetenceService
{
    public function index()
    {
        return Competence::whereNull('deleted_at')->get();
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:competences'
        ],[
            'name.unique' => 'Competência Já Cadastrada'
        ]);

        Competence::createCustom($request->all());
    }

    public function edit($id)
    {
        return Competence::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:competences,name,'.$id
        ],[
            'name.unique' => 'Competência Já Cadastrada'
        ]);
        Competence::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Competence::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'competences';
        $returns = Competence::select(['id', 'name']);

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
