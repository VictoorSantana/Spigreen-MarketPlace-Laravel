<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }

    public function verificar(Request $request)
    {
        
        auth::loginUsingId(1);
        return view('conta.index');   
    }


    public function logout($id) {

        auth::logout();
        return view('login.index');
    }
}
