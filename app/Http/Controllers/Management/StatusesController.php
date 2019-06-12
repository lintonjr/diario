<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrative\Status;
use Carbon\Carbon;

class StatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $ctrl = array(
    "name"    => "Status da Matéria",
    "route"   => "statuses",
    "title"   => "STATUS DA MATÉRIA",
    "errors" => ["error_all" => "Você não tem permissão!"]
  );

    public function index(Status $item)
    {
        $ctrl = $this->ctrl;

        return view('diario.'.$ctrl['route'].'.index', compact('itens', 'ctrl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Status $item)
    {
        $ctrl = $this->ctrl;

        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item'));
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

        $create = Status::createCustom($request->all());
        return "Cadastrado com sucesso.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ctrl = $this->ctrl;

        $item = Status::find($id);
        return view('diario.'.$ctrl['route'].'.show', compact('ctrl', 'item'));
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

        $item = Status::where('id', $id)->first();

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

        $update = Status::updateCustom($id, $request->all());
        return "Editado com sucesso.";
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

        $item = Status::updateCustom($id, ['deleted_at' => Carbon::now()]);
        return "Orgão deletado com sucesso!";
    }
    public function lista(Request $request)
    {
        $ctrl = $this->ctrl;

        $order = $request->has('order') ? $request->order : 'name';
        $sort = $request->has('sort') ? $request->sort : 'ASC' ;

        $i = Status::whereNull('deleted_at');

        $request['search'] = str_replace('/', '', str_replace('-', '', str_replace('.', '', $request->search)));
        if( $request->search || $request->search != '' ){
        $i->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%");
        })->orderBy('name', 'ASC');
        } else {
        $i->orderBy($order, $sort);
        }
        $itens = $i->paginate(28);
        return response(view('diario.'.$ctrl['route'].'.lista', compact('ctrl', 'itens')));
    }
}
