<?php

namespace App\Http\Controllers;

use App\Models\CarouselImage;
use App\Models\Company;
use App\Models\Recibo;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        $company = Company::findOrFail(1);
        $users = User::all();
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}", compact('company', 'users'));
        }

        return abort(404);
    }
    public function dashboard()
    {
        // return view('pages.dashboard');
        $carouselImages = CarouselImage::all();
        $company = Company::findOrFail(1);
        
      

        return view('pages.dashboard', compact('company', 'carouselImages'));

    }
    public function vr()
    {
        return view("pages.virtual-reality");
    }

    public function rtl()
    {
        return view("pages.rtl");
    }

    public function profile()
    {
        return view("pages.profile-static");
    }
    public function info()
    {
        return view("content-managment.general-info");
    }

    public function signin()
    {
        return view("pages.sign-in-static");
    }

    public function signup()
    {
        return view("pages.sign-up-static");
    }
    public function userrecipts()
    {
        // dd('userrecipts');
        // Recibos del usuario autenticado
        $recibos = Recibo::where('id_usuario', auth()->id())->get();

        // dd($recibos);
        return view("pages.user-recipts", compact('recibos'));
      
    }
}
