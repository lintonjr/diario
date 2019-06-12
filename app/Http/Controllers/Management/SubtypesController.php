<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SubtypeService;
use App\Services\TypeService;

use App\Models\Administrative\Section;

class SubtypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $ctrl = array(
        "name"      => "Subtipos",
        "prefix"    => "register",
        "route"     => "subtypes",
        "title"     => "Sub Tipos",
        "errors"    => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(SubtypeService $subtypeService, TypeService $typeService)
    {
        $this->service = $subtypeService;
        $this->typeService = $typeService;
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

        $types = $this->typeService->index();
        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'types'));
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

        $item = $this->service->edit($id);
        $types = $this->typeService->index();
        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item', 'types'));
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

        $this->service->delete($id);
        return redirect()->to('/'.$ctrl['prefix'].'/'.$ctrl['route'])->with('success', 'Deletado com sucesso!');
    }
    
    public function getData()
    {
        $datatable = $this->service->getData();
        return $datatable;
    }
}
