<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'province_name',
        'region_id',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
