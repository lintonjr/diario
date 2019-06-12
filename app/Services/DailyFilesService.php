<?php

namespace App\Services;

use App\Models\Administrative\Daily;
use App\Models\Administrative\Client;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Auth;
use Storage;

class DailyFilesService
{

    public function store($request)
    {

    }

    public function edit($id)
    {
        return Daily::where('id', $id)->first();
    }

    public function update($id, $request)
    {
        $daily = Daily::find($id);

        // $cli = Client::where('id', $daily->client_id)->first();

        // $file = $request->file('file_path');
        // $ext = $file->getClientOriginalExtension();
        // $d = date('YmdHis');
        // $upload_success = $file->storeAs('public/dailies/'.$cli->id.'/files/'.$id, 'daily'.$d.'.'.$ext);
        // $file = 'storage/dailies/'.$cli->id.'/files/'.$id.'/daily'.$d.'.'.$ext;
        // $data['file_path'] = $file;

        if ($daily->file_path){
            Storage::delete($daily->file_path);
        }

        if(isset($request->file_path)){
            $cli = Client::where('id', $daily->client_id)->first()->alias;

            $file = $request->file('file_path');
            $ext = $file->getClientOriginalExtension();
            $d = date('YmdHis');
            $upload = $file->storeAs(env('STORAGE_ENV').'/diario/'.$cli.'/dailies', 'daily'.$d.'.'.$ext);
            Storage::setVisibility($upload, 'public');
            $data['file_path'] = $upload;

            if($upload) {
                Daily::publishDaily($id, $data);
            }
        }
    }

    public function delete($id)
    {

    }

    public function getData()
    {
        $now = Carbon::now();
        $authUser = Auth::user();
        $view = 'dailyfiles';
        $returns = Daily::with('client')->select('dailies.*')
        ->where('date_released', '>=', $now)
        ->where('client_id', '=', $authUser->clients->first()->id);;

        return Datatables::of($returns)
            ->addColumn('action', function ($return) use ($view) {
                $edit =  route($view.'.edit',$return->id);
                $destroy =  route($view.'.destroy',$return->id);
                //$file = url($return->file_path);

                if($return->file_path != null){
                    $file = Storage::url($return->file_path);
                    return "&emsp;<a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-arrow-up-bold-hexagon-outline'></i></li></a>
                            <a href='{$file}' title='Baixar' target='_blank'><li class='bqX' data-tooltip='Baixar'><i class='mdi mdi-download'></i></li></a>";
                }
                return "&emsp;<a href='{$edit}' title='Editar' ><li class='bqX' data-tooltip='Editar'><i class='mdi mdi-arrow-up-bold-hexagon-outline'></i></li></a>";
            })
            ->editColumn('date_released', function ($return){
                return \Helper::formatDate($return->date_released);
            })
            ->make(true);
    }
}
