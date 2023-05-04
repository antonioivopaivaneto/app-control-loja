<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //

    public function index(){
        return view('app.login');

    }

    public function login(Request $request){


        $email = $request->get('email');
        $password = $request->get('password');

        $user = new User();
        $user_verify = $user->where('email', $email)
        ->where('password', $password)
        ->get()
        ->first();

        if(isset($user_verify->name)){
            auth()->login($user_verify);
            session_start();
            $request->session()->put('name_user', $user_verify->name);
            $request->session()->put('id_user', $user_verify->id);

            $credentials = $request->only('email', 'password');


            // Authentication passed...
            return redirect()->intended('loja')->with('message','Bem vindo '.$user_verify->name);


        }else{
            return redirect()->route('/')->with('message','Usuario invalido');
        }





    }

    public function sair(){
        session_start();
        Auth::logout();

        session_destroy();
        return redirect()->route('/');

    }
}
