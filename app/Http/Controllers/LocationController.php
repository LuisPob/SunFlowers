<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Commune;

class LocationController extends Controller
{
    public function getProvinces($regionId)
    {
        $provinces = Province::where('region_id', $regionId)->pluck('province_name', 'id');
        return response()->json($provinces);
    }

    public function getCommunes($provinceId)
    {
        $communes = Commune::where('province_id', $provinceId)->pluck('commune_name', 'id');
        return response()->json($communes);
    }
}
