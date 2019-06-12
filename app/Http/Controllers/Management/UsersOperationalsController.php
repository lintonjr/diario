<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserOperationalService;
use App\Services\ClientService;
use App\Models\Administrative\Entity;
use App\Models\Management\Agency;

class UsersOperationalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $ctrl = array(
        "name"    => "Usuários",
        "route"   => "usersoperationals",
        "title"   => "Usuários",
        "errors" => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(UserOperationalService $userOperationalService, ClientService $clientService)
    {
        $this->service = $userOperationalService;
        $this->clientService = $clientService;
    }

    

    public function index()
    {
        $ctrl = $this->ctrl;

        return view('diario.'.$ctrl['route'].'.index', compact('ctrl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ctrl = $this->ctrl;

        $entity = \Auth::user()->entities()->first();
        if ($entity) {
            $agencies = Agency::where('entity_id', $entity->id)->whereNull('deleted_at')->orderBy('name', 'asc')->get();
        } else {
            $tenant = \Tenant::getTenant();
            $ids = Entity::whereIn('client_id', $tenant)->get()->pluck(['id']);
            $agencies = Agency::whereIn('entity_id', $ids)->orderBy('name', 'asc')->get();
        }
        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'agencies'));
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
        //
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

        $item = $this->service->edit($id);
        
        $tenant = \Tenant::getTenant();
        $role = \Tenant::getRole();
        if (($role == "Administrador") || ($role == "Gestor do Cliente")) {
            $ids = Entity::whereIn('client_id', $tenant)->get()->pluck(['id']);
            $agencies = Agency::whereIn('entity_id', $ids)->whereNull('deleted_at')->orderBy('name', 'asc')->get();
        }

        if ($role == "Gestor da Entidade") {
            $entity = \Auth::user()->entities()->first();
            $agencies = Agency::where('entity_id', $entity->id)->whereNull('deleted_at')->orderBy('name', 'asc')->get();
        }

        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item', 'agencies'));
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
        //
    }

    public function getData()
    {
        $datatable = $this->service->getData();
        return $datatable;
    }
}
