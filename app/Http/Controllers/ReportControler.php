<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;

class ReportControler extends Controller
{
    public function reporteus(){
        $users = User::all();
        $pdf = SnappyPdf::loadView('pdf.reporte_usuarios',compact('users'));
        return $pdf->inline('reporte_usuarios.pdf');
    }
    
    public function reporteventa(){
        $venta = shop::all();
        $pdf = SnappyPdf::loadView('pdf.reporte_usuarios',compact('venta'));
        return $pdf->inline('reporte_usuarios.pdf');
    }
   
}
