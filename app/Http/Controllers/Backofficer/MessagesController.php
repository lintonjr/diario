<?php

namespace App\Http\Controllers\Backofficer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backofficer\Message;
use App\Models\Operational\Theme;

class MessagesController extends Controller
{
    public function message(Request $request, $id)
    {
        $theme = Theme::find($id);
        $create = Message::createCustom($request->all());
        $data['status'] = 'Reprovado';
        $data['message_id'] = $create->id;
        $theme->disapprove($id, $data);
    }
}
