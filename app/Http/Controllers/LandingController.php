<?php

namespace App\Http\Controllers;

use App\Models\CarouselImage;
use App\Models\Company;
use App\Models\compra;
use App\Models\FooterContent;
use App\Models\FooterTitle;
use Illuminate\Support\Facades\Auth;;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        //traer todas las imagenes del carousel
        $carouselImages = CarouselImage::all();
        // trae el nombre de la empresa para mostrarlo en el navbar

        $company = Company::findOrFail(1);
        $footerTitles = FooterTitle::all()->load('footerContents');
        // consulta para ver si el usuario autenticado ha comprado
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $compras = compra::where('user_id', auth()->id())
            ->where('status', 2)
            ->get()
            ->toArray();
            // dd($compra);
            return view('welcome', compact('carouselImages', 'company', 'footerTitles', 'compras'));
        }else{
            return view('welcome', compact('carouselImages', 'company', 'footerTitles'));

        }

        // $footerContent = FooterContent::all();

        // dd($footerTitles);

        // dd($company);
        // if(Auth::check()){
        //     return redirect('/dashboard');
        // }else{
        // return view('welcome');
        // }
        // return view('welcome', compact('carouselImages', 'company'));

        // return view('welcome')->with(['carouselImages'=> $carouselImages, 'company' => $company, 'footerTitles' => $footerTitles, 'footerContent' => $footerContent]);
    }
}
