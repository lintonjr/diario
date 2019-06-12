<?php

namespace App\Services;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use App\User;
use App\Models\Administrative\Role;
use App\Models\Administrative\Client;
use DB;

class UserService
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required'
        ],[
            'email.required' => 'Informe o E-mail',
            'email.unique' => 'E-mail Já cadastrado',
            'password.required' => 'Informe a Senha!'
        ]);
        
        //Gestor da Entidade
        if ($request['role_id'] == 5) {
            // $request->validate([
            //     'entity_id' => 'required'
            // ],[
            //     'entity_id' => 'Informe a Entidade!'
            // ]);
        }

        $createCustom = $this->model::createCustom($request->all());
        $createCustom->clients()->attach($request['client_id']);
        $createCustom->roles()->attach($request['role_id']);
        //Operador
        if ($request['role_id'] == 6) {
            foreach($request->agency_id as $agencies){
                $createCustom->agencies()->attach($agencies);
            }
        }
    }

    public function edit($id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users,email,'.$id
        ],[
            'email.unique' => 'E-mail Já cadastrado'
        ]);
        $this->model::updateCustom($id, $request->all());
    }

    public function delete($id)
    {
        $this->model::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function getData()
    {
        $view = 'users';
        $returns = $this->model::select(['users.*']);

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $roles =  route($view.'.roles',$return->id);
                //$clients =  route($view.'.showclients',$return->id);
                $clients =  route($view.'.clients',$return->id);
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "<a href='{$roles}' title='Papéis' class='bqX'><i class='mdi mdi-lock'></i></a>
                        <a href='{$clients}' title='Clientes' class='bqX'><i class='mdi mdi-account-switch'></i></a>
                        &emsp;<a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-pencil'></i></li></a>
                        <a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->make(true);
    }

    public function getRelation($id)
    {
        $view = 'users';
        $returns = Role::select(DB::raw('roles.*', 'role_user.role.id as role_id'))
            ->leftJoin('role_user', 'roles.id', '=', 'role_user.role_id')->where('role_user.user_id', '=', $id);

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view, $id) {
                $destroy =  route($view.'.detach',array($return->id, $id));
                return "&emsp;<a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->make(true);
    }

    public function getClients($id)
    {
        $view = 'users';
        $returns = Client::select(DB::raw('clients.*', 'client_user.client.id as client_id'))
            ->leftJoin('client_user', 'clients.id', '=', 'client_user.client_id')->where('client_user.user_id', '=', $id);

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view, $id) {
                $destroy =  route($view.'.detachclients',array($return->id, $id));
                return "&emsp;<a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->make(true);
    }

}
