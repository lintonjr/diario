<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Services\UserService;
use App\Services\ClientService;
use App\Services\RoleService;
use App\User;
use App\Models\Administrative\Client;
use App\Models\Administrative\Role;
use App\Models\Administrative\Entity;
use App\Models\Management\Agency;
use PDF;
use Response;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $ctrl = array(
        "name"    => "Usuários",
        "route"   => "users",
        "title"   => "Usuários",
        "view"    => "users-view",
        "create"  => "users-create",
        "update"  => "users-edit",
        "delete"  => "users-delete",
        "errors" => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(UserService $userService, ClientService $clientService, RoleService $roleService)
    {
        $this->service = $userService;
        $this->clientService = $clientService;
        $this->roleService = $roleService;
    }
    
    public function index(Request $request)
    {
        $ctrl = $this->ctrl;

        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }
        view()->share('ctrl',$ctrl);
        /*
        if($request->has('download')) {
        	// pass view file
            //$pdf = PDF::loadView($ctrl['route'].'.index');
            $pdf = PDF::loadHTML('<h1>Test</h1>');
            // download pdf
            return $pdf->download('userlist.pdf');
        }
        */

        return view($ctrl['route'].'.index', compact('itens', 'ctrl'));
    }

    public function users(Request $request)
    {
        $ctrl = $this->ctrl;
        $users = User::all();
        view()->share('users', $users);
        if($request->has('download')) {
        	// pass view file
            $pdf = PDF::loadView($ctrl['route'].'.users');
            // download pdf
            return $pdf->download('userlist.pdf');
        }
        return view($ctrl['route'].'.users', compact('ctrl', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['create'])){
            return redirect()->to('/home');
        }
        $clients = $this->clientService->index();
        $roles = $this->roleService->index();
        return view($ctrl['route'].'.create', compact('ctrl', 'item', 'clients', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['create'])){
            return redirect()->to('/home');
        }
        $this->service->store($request);
        return redirect()->to($ctrl['route'])->with('success', 'Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['update'])){
            return redirect()->to('/home');
        }

        $item = $this->service->edit($id);
        $entities = Entity::whereNull('deleted_at')->get();
        $clients = $this->clientService->index();
        $roles = $this->roleService->index();
        return view($ctrl['route'].'.create', compact('ctrl', 'item', 'clients', 'role', 'entities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['update'])){
            return redirect()->to('/home');
        }
        $this->service->update($id, $request);
        return redirect()->to($ctrl['route'])->with('success', 'Editado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['delete'])){
            return redirect()->to('/home');
        }
        $this->service->delete($id);
        return redirect()->to($ctrl['route'])->with('success', 'Deletado com sucesso!');
    }

    public function getData()
    {
        $datatable = $this->service->getData();
        return $datatable;
    }

    public function indexRoles(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }
        $roles = $this->roleService->index();
        $item = User::find($id);
        return response(view($ctrl['route'].'.roles', compact('ctrl', 'item', 'roles')));
    }

    public function getRelation(Request $request)
    {
        $id = $request->id;
        $datatable = $this->service->getRelation($id);
        return $datatable;
    }

    public function storeRoles(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['create'])){
            return redirect()->to('/home');
        }
        $itens = $this->service->edit($id);
        $data = $request->all();
        foreach ($data['role_id'] as $value) {
            $roles = $this->roleService->find($value);
            $itens->addRole($roles);
        }
        return redirect()->back();
    }
    
    public function destroyRole($role_id, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['delete'])){
            return redirect()->to('/home');
        }
        $itens = User::find($id);
        $role = Role::find($role_id);
        $itens->removeRole($role);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }

    /*
    public function showRoles($id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }
        $item = User::findOrFail($id);
        return view($ctrl['route'].'.showroles', compact('ctrl', 'item'));
    }

    public function listRoles(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }
        $roles = Role::all();
        $itens = User::find($id);
        return response(view($ctrl['route'].'.listroles', compact('ctrl', 'itens', 'roles')));
    }
    

    public function StoreRoles(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['create'])){
            return redirect()->to('/home');
        }
        $itens = User::find($id);
        $data = $request->all();
        $role = Role::find($data['role_id']);
        $itens->addRole($role);
        return redirect()->back();
    }

    public function DestroyRole($id, $role_id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['delete'])){
            return redirect()->to('/home');
        }
        $itens = User::find($id);
        $role = Role::find($role_id);
        $itens->removeRole($role);
        return redirect()->back();
    }
    */

    /*
    public function showClients($id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }
        $item = User::findOrFail($id);
        return view($ctrl['route'].'.showclients', compact('ctrl', 'item'));
    }

    public function listClients(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }
        $clients = Client::all();
        $itens = User::find($id);
        return response(view($ctrl['route'].'.listclients', compact('ctrl', 'itens', 'clients')));
    }

    public function StoreClients(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['create'])){
            return redirect()->to('/home');
        }
        $itens = User::find($id);
        $data = $request->all();
        $client = Client::find($data['client_id']);
        $itens->addClient($client);
        return redirect()->back();
    }
    
    public function DestroyClient($id, $client_id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['delete'])){
            return redirect()->to('/home');
        }
        $itens = User::find($id);
        $client = Client::find($client_id);
        $itens->removeClient($client);
        return redirect()->back();
    }
    */

    public function indexClients(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }
        $clients = $this->clientService->index();
        $item = User::find($id);
        return response(view($ctrl['route'].'.clients', compact('ctrl', 'item', 'clients')));
    }

    public function getClients(Request $request)
    {
        $id = $request->id;
        $datatable = $this->service->getClients($id);
        return $datatable;
    }

    public function storeClients(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['create'])){
            return redirect()->to('/home');
        }
        $itens = $this->service->edit($id);
        $data = $request->all();
        foreach ($data['client_id'] as $value) {
            $clients = $this->clientService->find($value);
            $itens->addClient($clients);
        }
        return redirect()->back();
    }

    public function destroyClients($client_id, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['delete'])){
            return redirect()->to('/home');
        }
        $itens = User::find($id);
        if ($itens->clients->count() == 1) {
            return redirect()->back()->with('error', 'Não foi possível excluir!');
        }
        $client = Client::find($client_id);
        $itens->removeClient($client);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }

    public function entities($id)
    {
        if(!empty($id)){
            $entities = Entity::where('client_id', $id)->orderBy('name', 'asc')->get();
            return Response::json($entities);
        }
        return [];
    }

    public function agencies($id)
    {
        if(!empty($id)){
            $agencies = Agency::where('entity_id', $id)->orderBy('name', 'asc')->get();
            return Response::json($agencies);
        }
        return [];
    }

}
