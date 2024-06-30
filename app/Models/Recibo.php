<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_compra',
        'id_producto',
        'cantidad_producto',
        'fecha',
        'hora',
        'id_usuario',
        'id_estado',
    ];

    // Relaciones
    public function compra()
    {
        return $this->belongsTo(Compra::class, 'id_compra');
    }

    // public function producto()
    // {
    //     return $this->belongsTo(Product::class, 'id_producto');
    // }

    // public function usuario()
    // {
    //     return $this->belongsTo(User::class, 'id_usuario');
    // }

    // public function estado()
    // {
    //     return $this->belongsTo(Estado::class, 'id_estado');
    // }
}
