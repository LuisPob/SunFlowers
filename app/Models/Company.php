<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // $table->id();
    //         $table->string('company_name');
    //         $table->string('address')->nullable();
    //         $table->string('region')->nullable();
    //         $table->string('province')->nullable();
    //         $table->string('commune')->nullable();
    //         $table->string('phone')->nullable();
    //         $table->string('email');
    //         $table->string('color_primary')->nullable();
    //         $table->string('color_secondary')->nullable();
    //         $table->integer('employees')->nullable();
    //         $table->string('logo')->nullable();
    static $rules = [
        'company_name' => 'required',
        'address' => 'nullable|string|max:255',
        'region_id' => 'nullable',
        'province_id' => 'nullable',
        'commune_id' => 'nullable',
        'phone' => 'nullable|numeric',
        'email' => 'required|email|max:255',
        'color_primary' => 'nullable|string|size:7',
        'color_secondary' => 'nullable|string|size:7',
        'color_tertiary' => 'nullable|string|size:7',
        'employees' => 'nullable',
        'logo' => 'nullable|image|mimes:png,jpg|max:2048',
    ];
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

}
