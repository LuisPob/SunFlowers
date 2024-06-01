<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;

class ReportControler extends Controller
{
    public function reporteus(){
        $users = User::all();
        $pdf = SnappyPdf::loadView('pdf.repus',compact('users'));
        return $pdf->download('reporte_usuarios.pdf');
    }
    
    public function reporteventa(){
        $venta = shop::all();
        $pdf = SnappyPdf::loadView('pdf.repvent',compact('venta'));
        return $pdf->download('reporte_usuarios.pdf');
    }
   
}
