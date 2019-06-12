<?php

namespace App\Services;

use App\Models\Administrative\LayoutPattern;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

use App\Models\Administrative\Client;

class LayoutPatternService
{

    public function __construct(LayoutPattern $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $tenant = \Tenant::getTenant();
        $ids = Client::whereIn('id', $tenant)->get()->pluck(['layout_pattern_id']);
        return $this->model::whereIn('id', $ids)->whereNull('deleted_at')->orderBy('name', 'ASC')->get();
    }

    public function find($value)
    {
        return $this->model::find($value);
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:layout_patterns'
        ],[
            'name.unique' => 'Padrão Já cadastrado'
        ]);

        $this->model::createCustom($request->all());
    }

    public function edit($id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:layout_patterns,name,'.$id
        ],[
            'name.unique' => 'Padrão Já cadastrado'
        ]);
        $this->model::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        $this->model::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'layoutpatterns';
        $returns = $this->model::select(['id', 'name']);

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
