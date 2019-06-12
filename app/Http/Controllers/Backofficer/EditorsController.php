<?php

namespace App\Http\Controllers\Backofficer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operational\Theme;
use App\Services\EditorService;
use App\Services\SubtypeService;
use App\Services\TypeService;
use App\Services\CompetenceService;
use App\Services\LayoutService;
use App\Models\Backofficer\Message;
use Carbon\Carbon;


class EditorsController extends Controller
{
    protected $ctrl = array(
        "name"    => "Publicação",
        "route"   => "editors",
        "title"   => "Publicações",
        "errors" => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(
        EditorService $editorService,
        TypeService $typeService,
        SubtypeService $subtypeService,
        CompetenceService $competenceService,
        LayoutService $layoutService
    )
    {
         $this->service = $editorService;
         $this->typeService = $typeService;
         $this->subtypeService = $subtypeService;
         $this->competenceService = $competenceService;
         $this->layoutService = $layoutService;
    }


    public function index()
    {
        $ctrl = $this->ctrl;

        return view('diario.'.$ctrl['route'].'.index', compact('ctrl'));
    }

    public function show($id)
    {
        $ctrl = $this->ctrl;

        $item = $this->service->show($id);
        $user = \Auth::user()->where('id', $item->user_created)->first();
        return view('diario.'.$ctrl['route'].'.show', compact('ctrl', 'item', 'user'));
    }

    public function getData()
    {
        $datatable = $this->service->getData();
        return $datatable;
    }

    public function replicate(Request $request, $id)
    {
        //$ctrl = $this->ctrl;

        $textContent = $request['content'];

        $textContent = str_replace('<div>b></div>', '<br>', $textContent);

        $request['content'] = $textContent;
        
        $this->service->replicate($id, $request);
        return redirect()->back()->with('success', 'Editado com Sucesso!');
    }

    public function disapprove($id)
    {
        Theme::find($id);
        $data['status'] = 'Reprovado';
        Theme::disapprove($id, $data);
        return redirect()->to('/diario/editors');
    }

    public function approves($id)
    {
        $item = Theme::find($id);

        $repeats = $item->dailySync()->get();

        $now = Carbon::now();
        $data['status'] = 'Aprovado';
        $data['user_accepted'] = \Auth::user()->id;
        $data['publish_number'] = Theme::uniqueAlfa(6);
        $data['accepted_at'] = $now;
        $approves = Theme::approves($id, $data);
        if($approves){
            foreach($repeats as $repeat)
            {
                $data['daily_id'] = $repeat->id;
                $data['agency_id'] = $item->agency_id;
                $data['type_id'] = $item->type_id;
                $data['subtype_id'] = $item->subtype_id;
                $data['competence_id'] = $item->competence_id;
                $data['layout_id'] = $item->layout_id;
                $data['repeated_id'] = $item->id;
                $data['act'] = $item->act;
                $data['year'] = $item->year;
                $data['title'] = $item->title;
                $data['content'] = $item->content;
                $data['file'] = $item->file;
                $data['status'] = 'Aprovado';
                $data['user_accepted'] = \Auth::user()->id;
                $data['publish_number'] = Theme::uniqueAlfa(6);
                $data['user_created'] = $item->user_created;
                $data['accepted_at'] = $now;

                Theme::createRepeatCustom($data);
            }
        }
        return redirect()->to('/diario/editors');
    }

    public function message(Request $request, $id)
    {
        Theme::find($id);
        $create = Message::createCustom($request->all());
        $data['status'] = 'Reprovado';
        $data['message_id'] = $create->id;
        Theme::disapprove($id, $data);
        return redirect()->to('/diario/editors');

    }

}
