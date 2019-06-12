<?php

namespace App\Services;

use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;

use App\Models\Administrative\Role;
use App\Models\Administrative\Permission;

class RoleService
{

    public function __construct(Role $role)
    {
        $this->model = $role;
    }

    public function index()
    {
        return $this->model::whereNull('deleted_at')->orderBy('name', 'ASC')->get();
    }

    public function find($value)
    {
        return Role::find($value);
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:roles'
        ],[
            'name.unique' => 'Papel já cadastrado'
        ]);
        $this->model::createCustom($request->all());
    }

    public function edit($id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|unique:roles,'.$id
        // ],[
        //     'name.unique' => 'Papel já cadastrado'
        // ]);
        $this->model::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        $this->model::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'roles';
        $returns = $this->model::select(['id', 'name', 'description', 'created_at', 'updated_at']);

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $permission =  route($view.'.permissions',$return->id);
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$permission}' title='Permissões' class='bqX'><i class='mdi mdi-lock'></i></a>
                        <a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-pencil'></i></li></a>
                        <a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->make(true);
    }

    public function getRelation($id)
    {
        $view = 'roles';
        $returns = Permission::with('roles')->select(DB::raw('permissions.*', 'permission_role.permission.id as permission_id'))
            ->leftJoin('permission_role', 'permissions.id', '=', 'permission_role.permission_id')->where('permission_role.role_id', '=', $id);

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view, $id) {
                $destroy =  route($view.'.detach',array($return->id, $id));
                return "&emsp;<a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->make(true);
    }
}
