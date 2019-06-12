<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operational\Theme;
use App\User;
use App\Models\Administrative\Daily;
use App\Models\Administrative\Client;
use Carbon\Carbon;

class searchsController extends Controller
{
    private $totalPage = 10;

    public function listClients()
    {
        $clients = Client::whereNull('deleted_at')->get();
        return response(view('Frontend.clients.index', compact('clients')));
    }

    public function clientPage($alias)
    {
        $now = Carbon::now();
        $client = Client::where('alias', $alias)->first();
        $daily = Daily::where('client_id', $client->id)->where('date_released', '<=', $now)->whereNotNull('file_path')->orderBy('id', 'desc')->first();
        $clientName = $client->name;
        return view('Frontend.clients.clientpage', compact('client', 'clientName', 'daily'));
    }

    public function search($alias)
    {
        $client = Client::where('alias', $alias)->first();
        $clientName = $client->name;
        return view('Frontend.clients.search', compact('client', 'clientName'));
    }

    public function searchResult(Request $request, Theme $theme, $alias)
    {
        $client = Client::where('alias', $alias)->first();
        $dataForm = $request->except('_token');
        
        $themes = $theme->search($dataForm, $this->totalPage, $client);

        return view('Frontend.clients.search', compact('themes', 'dataForm', 'client'));
    }

    public function showTheme($id)
    {
        $item = Theme::find($id);
        $user = User::where('id', $item->user_created)->first();
        return view('diario.'.'designers.show', compact('item', 'user'));
    }

    public function searchid()
    {
        return view('searchid');
    }

    public function searchidResult(Request $request, Theme $theme, $alias)
    {
        $now = Carbon::now();
        $client = Client::where('alias', $alias)->first();
        $dataForm = $request->except('_token');
        $item = $theme->searchid($dataForm);
                
        if($item != null && $item->daily->date_released <= $now){
            $user = User::where('id', $item->user_created)->first();
            return view('diario.'.'designers.show', compact('client', 'item', 'dataForm', 'user'));
        }else{
            return view('Frontend.clients.clientpage', compact('client'));
        }
    }

    public function searchDailies($alias)
    {
        $client = Client::where('alias', $alias)->first();
        $clientName = $client->name;

        return view('Frontend.clients.dailies', compact('client', 'clientName'));
    }
    
    public function searchDailiesResult(Request $request, Daily $daily, $alias)
    {
        $client = Client::where('alias', $alias)->first();
        $dataForm = $request->except('_token');
        $dailies = $daily->search($dataForm, $this->totalPage, $client);

        return view('Frontend.clients.dailies', compact('dailies', 'dataForm', 'client'));
    }
}
