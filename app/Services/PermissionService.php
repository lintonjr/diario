<?php

namespace App\Services;

use App\Models\Administrative\Permission;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;

class PermissionService
{
    public function index()
    {
        return Permission::whereNull('deleted_at')->orderBy('name', 'ASC')->get();
    }

    public function find($value)
    {
        return Permission::find($value);
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:permissions'
        ],[
            'name.unique' => 'Permissão Já cadastrada'
        ]);
        DB::beginTransaction();
            $data['name'] = strtolower($request['name']).'-view';
            $data['description'] = $request['description'];
            $data['area'] = $request['name'];
            $createView = Permission::createCustom($data);

            $data['name'] = strtolower($request['name']).'-create';
            $data['description'] = $request['description'];
            $data['area'] = $request['name'];
            $createCreate = Permission::createCustom($data);

            $data['name'] = strtolower($request['name']).'-edit';
            $data['description'] = $request['description'];
            $data['area'] = $request['name'];
            $createEdit = Permission::createCustom($data);

            $data['name'] = strtolower($request['name']).'-delete';
            $data['description'] = $request['description'];
            $data['area'] = $request['name'];
            $createDelete = Permission::createCustom($data);

        if($createView == true && $createCreate == true && $createEdit == true && $createDelete == true) {
            DB::commit();
        } else {
            DB::rollBack();
        }
    }

    public function edit($id)
    {
        return Permission::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:permissions,'.$id
        ],[
            'name.unique' => 'Permissão Já cadastrada'
        ]);
        Permission::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        Permission::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'permissions';
        $returns = Permission::select(['id', 'name', 'description', 'area']);

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
