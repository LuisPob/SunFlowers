<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportControler extends Controller
{
    public function vrepuser(){
        $users = User::all();
        $pdf = SnappyPdf::loadView('pdf.invoice', $data);
        return $pdf->inline('invoice.pdf');
    }
}
