<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Models\Recibo;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReciboController extends Controller
{
    public function userrecipts()
    {
        // Compras del usuario autenticado
        $compras = compra::where('user_id', auth()->id())
            ->where('status', 2)
            ->get()
            ->toArray();
        // dd($compras);
        return view("pages.user-recipts", compact('compras'));
    }

    public function viewRecibo($id)
    {
        // dd($id);
        $productos = Recibo::where('id_compra', $id)
            ->where('id_usuario', auth()->id())
            ->get()
            ->toArray();
        $compra = compra::findOrFail($id)->toArray();
        $user = User::findOrFail($compra['user_id'])->toArray();

        $pdf = Pdf::loadView('pdf.recipt', compact('productos', 'compra' , 'user'));
        return $pdf->stream();
    }

    public function sendRecibo($id)
    {
        $productos = Recibo::where('id_compra', $id)
            ->where('id_usuario', auth()->id())
            ->get()
            ->toArray();
        $compra = compra::findOrFail($id)->toArray();
        $user = User::findOrFail($compra['user_id'])->toArray();
    
        $pdf = Pdf::loadView('pdf.recipt', compact('productos', 'compra', 'user'));
        
        // dd($pdf);

        Mail::send('emails.recibo', compact('user'), function ($message) use ($pdf, $user) {
            $message->to(auth()->user()->email)
                ->subject('Tu recibo de compra')
                ->attachData($pdf->output(), "recibo.pdf");
        });
    
        return back()->with('succes', 'El recibo ha sido enviado a tu correo.');
    }
    
}
