<?php

namespace App\Services;
use Yajra\Datatables\Datatables;
use App\User;
use Carbon\Carbon;
use Auth;
use DB;

class UserOperationalService
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {
        $entity_id = \Auth::user()->entity_id;
        $request['entity_id'] = $entity_id;
        $createCustom = $this->model::createCustomOperational($request->all());
        //Operador
        $createCustom->roles()->attach(6);
        $createCustom->clients()->attach(Auth::user()->clients()->first()->id);
        foreach($request->agency_id as $agencies){
            $createCustom->agencies()->attach($agencies);
        }
    }

    public function edit($id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $user = $this->model::find($id);
        $updateCustom = $this->model::updateCustomOperational($id, $request->all());
        $user->clients()->sync(Auth::user()->clients()->first()->id);
        $user->agencies()->sync($request->agency_id);
    }

    public function delete($id)
    {
        $this->model::updateCustom($id, ['deleted_at' => Carbon::now()]);
    }

    public function attachAgencies($request, $create)
    {
        foreach($request->agency_id as $agencies){
            $create->agencies()->attach($agencies);
        }
    }

    public function getData()
    {
        $view = 'usersoperationals';
        //$entity = Auth::user()->clients->first()->id;
        $entity = Auth::user()->entity_id;
        $returns = User::with('roles')->select(DB::raw('users.*', 'client_user.client_id as client_id', 'role_user'))
            //->leftJoin('client_user', 'users.id', '=', 'client_user.user_id')->where('client_user.client_id', '=', $entity)
            ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')->where('role_user.role_id', '=', 6);

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                return "&emsp;<a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-pencil'></i></li></a>
                        <a href='{$destroy}' class='cancel-button'><li class='bqX' data-tooltip='Excluir'><i class='mdi mdi-delete'></i></li></a>";
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }

}
