<?php

namespace App\Services;

use App\Models\Administrative\Client;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class ClientService
{

    public function index()
    {
        return Client::whereNull('deleted_at')->orderBy('name', 'ASC')->get();
    }

    public function find($value)
    {
        return Client::find($value);
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:clients'
        ],[
            'name.unique' => 'Cliente Já cadastrado'
        ]);

        Client::createCustom($request->all());
    }

    public function edit($id)
    {
        return Client::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:clients,name,initials,alias'.$id
        ],[
            'name.unique' => 'Cliente Já cadastrado'
        ]);
        Client::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Client::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'clients';
        $returns = Client::with('layoutPattern')->select('clients.*');

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
