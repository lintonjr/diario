<?php

namespace App\Http\Controllers\Operational;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operational\Theme;
use App\Models\Administrative\Type;
use App\Models\Administrative\Subtype;
use App\Services\ThemeService;
use App\Services\SubtypeService;
use App\Services\TypeService;
use App\Services\CompetenceService;
use App\Services\LayoutService;
use Carbon\Carbon;
use Response;

class ThemesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $ctrl = array(
        "name"      => "Publicação",
        "route"     => "themes",
        "title"     => "Publicações",
        "errors"    => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(
        ThemeService $themeService,
        TypeService $typeService,
        SubtypeService $subtypeService,
        CompetenceService $competenceService,
        LayoutService $layoutService
    )
    {
         $this->service = $themeService;
         $this->typeService = $typeService;
         $this->subtypeService = $subtypeService;
         $this->competenceService = $competenceService;
         $this->layoutService = $layoutService;
    }

    

    public function index()
    {
        $ctrl = $this->ctrl;

        $messages = Theme::with('message')->whereNotNull('message_id')->get();
        return view('diario.'.$ctrl['route'].'.index', compact('ctrl', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Theme $item)
    {
        $ctrl = $this->ctrl;

        $dailies = $this->service->themeDailies();
        if (count($dailies)>0)  {
            $now = Carbon::now();
            $hour = '18:00:00';
            
            $agencies = $this->service->themeAgencies();
            $sections = $this->service->themeSections();
            
            $dailiesRepeat = $this->service->themeDailiesRepeat();
            $years = $this->service->years();

            if($now->toTimeString() > $hour){
                $daily = $dailies[1];
            } else {
                $daily = $dailies[0];
            }

            if($now->toTimeString() > $hour){
                $dateDaily = $now->addDays(1);
            } else {
                $dateDaily = $now;
            }

            $types          = $this->typeService->index();
            $subtypes       = $this->subtypeService->index();
            $competences    = $this->competenceService->index();
            $layouts        = $this->layoutService->index();

            return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item', 'daily', 'dateDaily', 'sections',
            'agencies', 'types', 'subtypes', 'layouts', 'competences', 'dailiesRepeat', 'years'));
        } else {
            return redirect()->to('/diario/'.$ctrl['route'])->with('error', 'Diário não Localizado!');
        }
        
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
        return redirect()->to('/diario/'.$ctrl['route'])->with('success', 'Criado com sucesso!');
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

        $item = Theme::find($id);
        $user = \Auth::user()->where('id', $item->user_created)->first();
        return view('diario.'.$ctrl['route'].'.show', compact('ctrl', 'item', 'user'));
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
        $now = Carbon::now();
        $hour = '18:00:00';
        $agencies = $this->service->themeAgencies();
        $sections = $this->service->themeSections();
        $dailies = $this->service->themeDailies();
        $dailiesRepeat = $this->service->themeDailiesRepeat();
        $years = $this->service->years();

        if($now->toTimeString() > $hour){
            $daily = $dailies[1];
        } else {
            $daily = $dailies[0];
        }

        if($now->toTimeString() > $hour){
            $dateDaily = $now->addDays(1);
        } else {
            $dateDaily = $now;
        }

        $types          = $this->typeService->index();
        $subtypes       = $this->subtypeService->index();
        $competences    = $this->competenceService->index();
        $layouts        = $this->layoutService->index();
        $item           = $this->service->edit($id);
        return view('diario.'.$ctrl['route'].'.create', compact('ctrl', 'item', 'daily', 'dateDaily', 'sections',
            'agencies', 'types', 'subtypes', 'layouts', 'statuses', 'competences', 'dailiesRepeat', 'years'));
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
        $ctrl = $this->ctrl;

        $this->service->delete($id);
        return redirect()->to('/diario/'.$ctrl['route'])->with('success', 'Deletado com sucesso!');
    }

    public function getData()
    {
        $datatable = $this->service->getData();
        return $datatable;
    }

    public function types($id)
    {
        if(!empty($id)){
            $types = Type::where('section_id', $id)->get();
            return Response::json($types);
        }
        return [];
    }

    public function subtypes($id)
    {
        if(!empty($id)){
            $subtypes = Subtype::where('type_id', $id)->get();
            return Response::json($subtypes);
        }
        return [];
    }
}
