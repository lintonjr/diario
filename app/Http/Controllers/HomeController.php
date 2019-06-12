<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operational\Theme;
use App\User;
use App\Models\Administrative\Entity;
use App\Models\Administrative\Daily;
use App\Models\Administrative\Client;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showChangePassword(){
        return view('auth.passwords.change');
    }

    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth()->user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Sua senha atual não corresponde à senha fornecida. Por favor, tente novamente.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Nova senha não pode ser igual à sua senha atual. Escolha uma senha diferente.");
        }

        $this->validate($request, [
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth()->user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Senha alterada com sucesso!");

    }
}
