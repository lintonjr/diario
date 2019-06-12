<?php

namespace App\Http\Controllers\Backofficer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operational\Theme;
use App\Models\Administrative\Daily;
use App\Services\DesignerService;
use App\Services\SubtypeService;
use App\Services\TypeService;
use App\Services\ThemeService;
use App\Services\CompetenceService;
use App\Services\LayoutService;
use Carbon\Carbon;
use App\User;
use PDF;
use JasperPHP\JasperPHP;

class DesignersController extends Controller
{
    protected $ctrl = array(
        "name"      => "Publicação",
        "route"     => "designers",
        "title"     => "Publicações",
        "errors"    => ["error_all" => "Você não tem permissão!"]
    );

    public function __construct(
        DesignerService $designerService,
        ThemeService $themeService,
        TypeService $typeService,
        SubtypeService $subtypeService,
        CompetenceService $competenceService,
        LayoutService $layoutService
    )
    {
         $this->service = $designerService;
         $this->themeService = $themeService;
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

        $item = Theme::find($id);
        $user = User::where('id', $item->user_created)->first();
        return view('diario.'.$ctrl['route'].'.show', compact('item', 'ctrl', 'user'));
    }

    public function showAllDailyThemes($id)
    {
        $ctrl = $this->ctrl;

        $daily = Daily::find($id);
        $themes = Theme::where('daily_id', $id)->whereNotNull('user_accepted')->orderBy('layout_id')->get();

        return view('diario.'.$ctrl['route'].'.showAllDailyThemes', compact('themes', 'daily'));
    }
    
    public function downloadThemesPDF($id)
    {
        $ctrl = $this->ctrl;

        $daily = Daily::find($id);

        $themes = Theme::where('daily_id', $id)->whereNotNull('user_accepted')->get();
        //$themes = Theme::where('daily_id', $id)->where('id','<',46)->whereNotNull('user_accepted')->get();
        //dd($themes);
        view()->share('daily', $daily);
        view()->share('themes', $themes);
        $pdf = PDF::loadView('diario.'.$ctrl['route'].'.showAllDailyThemes');
        return $pdf->download('themes.pdf');
    }
    
    public function downloadPDFDaily($id)
    {
        
        $daily = Daily::find($id);
        $dt = Carbon::parse($daily->date_released)->format('d \\d\\e F \\d\\e Y'); 
        $trans = array("January" => "Janeiro", 
                "February"  => "Fevereiro", 
                "March"     => "Março",
                "April"     => "Abril",
                "May"       => "Maio",
                "June"      => "Junho",
                "July"      => "Julho",
                "August"    => "Agosto",
                "September" => "Setembro",
                "October"   => "Outubro",
                "November"  => "Novembro",
                "December"  => "Dezembro"
        );
        
        $dt = strtr($dt, $trans);
               
        $title = $dt." • ".$daily->description." • ANO ".$daily->year." | Nº ".$daily->number;
        //"Amazonas , 13 de abril de 2019 • Associação dos Municípios do Acre • ANO X | Nº 2292"
        $output = public_path() . '/reports/'.time().'_themes';
        $report = new JasperPHP;
        
        $report->process(
            public_path() . '/reports/Diario_PDF.jrxml', 
            $output, 
            array('pdf'),
            array(
                "daily_id" => $id,
                "txtTitle" => htmlentities($title)
            ),
            array(
                'driver' => 'mysql',
                'username' => 'root',
                'password' => env('DB_PASSWORD'),
                'host' => 'mysql',
                'database' => 'diario',
                'port' => '3306',
                //'jdbc_driver' => 'com.mysql.cj.jdbc.Driver',
                //'jdbc_url' => 'jdbc:mysql://mysql:3306/diario?verifyServerCertificate=false&useSSL=true',
                //'jdbc_url' => 'jdbc:mysql://mysql:3306/diario?autoReconnect=true&useSSL=false',
            ),
            'pt_BR' 
        );
        
        $report->execute();

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.time().'_themes.pdf');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Length: ' . filesize($output.'.pdf'));
        flush();
        readfile($output.'.pdf');
        unlink($output.'.pdf');
    }
    

    /*
    public function downloadPDFDaily($id)
    {
        $output = public_path() . '/reports/'.time().'_themes';
        $report = new JasperPHP;
        
        $report->process(
            public_path() . '/reports/Diario.jrxml', 
            $output, 
            array('pdf'),
            array(
                "daily_id" => $id
            ),
            array(
                'driver' => 'mysql',
                'username' => 'root',
                'password' => 'root',
                'host' => 'mysql',
                'database' => 'diario',
                'port' => '3306',
                //'jdbc_driver' => 'com.mysql.cj.jdbc.Driver',
                //'jdbc_url' => 'jdbc:mysql://mysql:3306/diario?verifyServerCertificate=false&useSSL=true',
                //'jdbc_url' => 'jdbc:mysql://mysql:3306/diario?autoReconnect=true&useSSL=false',
            ),
            'pt_BR' 
        );
        
        $report->execute();

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.time().'_themes.pdf');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Length: ' . filesize($output.'.pdf'));
        flush();
        readfile($output.'.pdf');
        unlink($output.'.pdf');
    }
    */

    /*
    public function downloadPDFDaily($id)
    {
        $ctrl = $this->ctrl;

        $daily = Daily::find($id);
        $themes = Theme::where('daily_id', $id)->whereNotNull('user_accepted')->get();
        
        //return view('diario.'.$ctrl['route'].'.showDailyPDF', compact('themes', 'daily'));

        view()->share('daily', $daily);
        view()->share('themes', $themes);
        $pdf = PDF::loadView('diario.'.$ctrl['route'].'.showDailyPDF');
        return $pdf->download('daily.pdf');
    }
    */
    

    public function getData()
    {
        $datatable = $this->service->getData();
        return $datatable;
    }

    public function indexThemes($id)
    {
        $ctrl = $this->ctrl;

        $item = $this->service->edit($id);
        return view('diario.'.$ctrl['route'].'.themes', compact('ctrl', 'item'));
    }

    public function getRelation(Request $request)
    {
        $id = $request->id;
        $datatable = $this->service->getRelation($id);
        return $datatable;
    }

    public function diagrammer($id)
    {
        $ctrl = $this->ctrl;

        $themes = Theme::where('id', $id)->first();
        Theme::updateCustom($id, ['diagrammed_by' => Carbon::now()]);
        
        return redirect()->to('/diario/'.$ctrl['route'].'/themes/'.$themes->daily_id);
        //return redirect()->back();
    }
}
