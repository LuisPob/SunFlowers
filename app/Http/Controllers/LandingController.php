<?php

namespace App\Http\Controllers;

use App\Models\CarouselImage;
use App\Models\Company;
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
        // if(Auth::check()){
        //     return redirect('/dashboard');
        // }else{
        // return view('welcome');
        // }
        // return view('welcome', compact('carouselImages', 'company'));
        return view('welcome')->with(['carouselImages'=> $carouselImages, 'company' => $company]);
    }
}
