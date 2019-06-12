<?php

namespace App\Http\Controllers\Backofficer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DailyFilesService;
use App\Services\ClientService;

class DailyfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $ctrl = array(
        "name"    => "Diário Oficial",
        "route"   => "dailyfiles",
        "title"   => "Diário Oficial",
        "errors" => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(DailyFilesService $dailyFilesserviceService, ClientService $clientService)
    {
        $this->service = $dailyFilesserviceService;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $clients = $this->clientService->index();
        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item', 'clients'));
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
        // $this->validate($request, [
        //     'file_path' => 'required|mimes:pdf',
        // ]);

        $update = $this->service->update($id, $request);
        return redirect()->to('/diario/'.$ctrl['route'])->with('success', 'Editado com Sucesso!');
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
