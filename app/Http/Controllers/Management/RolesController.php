<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Models\Administrative\Role;
use App\Models\Administrative\Permission;
use App\Services\RoleService;
use App\Services\PermissionService;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $ctrl = array(
        "name"      => "Papeis",
        "prefix"    => "system",
        "route"     => "roles",
        "title"     => "Papéis",
        "view"      => "roles-view",
        "create"    => "roles-create",
        "update"    => "roles-edit",
        "delete"    => "roles-delete",
        "errors"    => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(RoleService $roleService, PermissionService $permissionService)
    {
        $this->service = $roleService;
        $this->permissionService = $permissionService;
    }
    

    public function index()
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }
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
        if(Gate::denies($ctrl['create'])){
            return redirect()->to('/home');
        }
        return view('diario.'.$ctrl['route'].'.create', compact('ctrl'));
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
        return redirect()->to('/'.$ctrl['prefix'].'/'.$ctrl['route'])->with('success', 'Criado com sucesso!');
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
        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item'));
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
        // if(Gate::denies($ctrl['update'])){
        //     return redirect()->to('/home');
        // }
        
        $this->service->update($id, $request);
        return redirect()->to('/'.$ctrl['prefix'].'/'.$ctrl['route'])->with('success', 'Editado com Sucesso!');
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
        return redirect()->to('/'.$ctrl['prefix'].'/'.$ctrl['route'])->with('success', 'Deletado com sucesso!');
    }

    public function getData()
    {
        $datatable = $this->service->getData();
        return $datatable;
    }

    public function indexPermissions(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['view'])){
            return redirect()->to('/home');
        }

        $permissions = $this->permissionService->index();
        $item = Role::find($id);
        return response(view('diario.'.$ctrl['route'].'.permissions', compact('ctrl', 'item', 'permissions')));
    }

    public function getRelation(Request $request)
    {
        $id = $request->id;
        $datatable = $this->service->getRelation($id);
        return $datatable;
    }

    public function storePermissions(Request $request, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['create'])){
            return redirect()->to('/home');
        }

        $itens = $this->service->edit($id);
        $data = $request->all();

        foreach ($data['permission_id'] as $value) {
            $permissions = $this->permissionService->find($value);
            $itens->addPermission($permissions);
        }

        return redirect()->back();
    }

    public function destroyPermission($permission_id, $id)
    {
        $ctrl = $this->ctrl;
        if(Gate::denies($ctrl['delete'])){
            return redirect()->to('/home');
        }

        $itens = Role::find($id);
        $permission = Permission::find($permission_id);
        $itens->removePermission($permission);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
