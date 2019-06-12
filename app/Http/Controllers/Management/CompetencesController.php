<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CompetenceService;


class CompetencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected $ctrl = array(
        "name"      => "Competências",
        "prefix"    => "register",
        "route"     => "competences",
        "title"     => "COMPETÊNCIAS",
        "errors"    => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(CompetenceService $competenceService)
    {
        $this->service = $competenceService;
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
