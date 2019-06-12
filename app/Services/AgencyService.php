<?php

namespace App\Services;

use App\Models\Management\Agency;
use App\Models\Administrative\Category;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Auth;

class AgencyService
{

    public function categories()
    {
        return Category::where('deleted_at')->orderBy('name', 'ASC')->get();
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:agencies,name,NULL,id,entity_id,'.$request->entity_id
        ],[
            'name.unique' => 'Órgão já cadastrado nesta entidade'
        ]);

        $authUser = Auth::user();
        if ($authUser->roles->first()->name == "Gestor da Entidade") {
            $data = $request->all();
            $data['entity_id'] = $authUser->entity_id;
            Agency::createCustom($data);
        } else {
            Agency::createCustom($request->all());
        }

    }

    public function edit($id)
    {
        return Agency::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'unique:agencies,name,'.$id.',id,entity_id,'.$request->entity_id
        ],[
            'name.unique' => 'Órgão já cadastrado nesta entidade'
        ]);
        Agency::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Agency::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $authUser = Auth::user();
        $view = 'agencies';
        if ($authUser->roles->first()->name == "Gestor da Entidade") {
            $returns = Agency::with(['entity','category'])->select('agencies.*')->where('entity_id', $authUser->entity_id);
        } else {
            $returns = Agency::with(['entity','category'])->select('agencies.*');
        }

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
