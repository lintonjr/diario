<?php

namespace App\Services;

use App\Models\Administrative\Entity;
use App\Models\Administrative\State;
use App\Models\Administrative\Client;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class EntityService
{
    public function index()
    {
        return Entity::whereNull('deleted_at')->orderBy('name', 'ASC')->get();
    }

    public function find($value)
    {
        return Entity::find($value);
    }

    public function states()
    {
        return State::all();
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:entities,name,NULL,id,state_id,'.$request->state_id.',client_id,'.$request->client_id
        ],[
            'name.unique' => 'Entidade já cadastrada neste estado e cliente'
        ]);
        Entity::createCustom($request->all());
    }

    public function edit($id)
    {
        return Entity::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:entities,name,'.$id.',id,state_id,'.$request->state_id.',client_id,'.$request->client_id
        ],[
            'name.unique' => 'Entidade já cadastrada neste estado e cliente'
        ]);
        Entity::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Entity::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'entities';
        $returns = Entity::with(['state','client'])->select('entities.*');

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
