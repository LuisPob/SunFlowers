<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // if(Auth::check()){
        //     return redirect('/dashboard');
        // }else{
            return view('welcome');
        // }
    }
}
