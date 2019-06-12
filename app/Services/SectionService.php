<?php

namespace App\Services;

use App\Models\Administrative\Section;
use App\Models\Administrative\Entity;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;

class SectionService
{

    public function index()
    {
        return Section::whereNull('deleted_at')->get();
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:sections,name,NULL,id,client_id,'.$request->client_id
        ],[
            'name.unique' => 'Caderno já cadastrado para este cliente'
        ]);
        Section::createCustom($request->all());
    }

    public function edit($id)
    {
        return Section::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:sections,name,'.$id.',id,client_id,'.$request->client_id
        ],[
            'name.unique' => 'Caderno já cadastrado para este cliente'
        ]);
        Section::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Section::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'sections';
        $returns = Section::with(['client', 'entities'])->select('sections.*');

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $relation =  route($view.'.entities',$return->id);
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$relation}' title='Adicionar Entidade' ><li class='bqX' data-tooltip='Entidade'><i class='mdi mdi-city'></i></li></a>
                        <a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-pencil'></i></li></a>
                        <a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->make(true);
    }

    public function getRelation($id)
    {
        $view = 'sections';
        $returns = Entity::with('sections')->select(DB::raw('entities.*', 'entity_section.entity.id as entity_id'))
            ->leftJoin('entity_section', 'entities.id', '=', 'entity_section.entity_id')->where('entity_section.section_id', '=', $id);

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view, $id) {
                $destroy =  route($view.'.detach',array($return->id, $id));
                return "&emsp;<a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->make(true);
    }

    public function syncEntities($request, $id)
    {
        $section = Section::find($id);
        $section->entities()->sync($request->entity_id);
    }

    public function detachEntities($entity_id, $id)
    {
        $section = Section::find($id);
        $entity = Entity::find($entity_id);
        $section->entities()->detach($entity);
    }
}
