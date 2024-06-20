<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $slug
 * @property $price
 * @property $shipping_cost
 * @property $description
 * @property $category_id
 * @property $brand_id
 * @property $image_path
 * @property $created_at
 * @property $updated_at
 * @property $quantity
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'slug' => 'required',
		'price' => 'required',
		'shipping_cost' => 'required',
		'description' => 'nullable',
		'category_id' => 'required',
		'brand_id' => 'nullable',
		'quantity' => 'required',
		'image_path' => 'nullable|image|mimes:png,jpg|max:30280',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','slug','price','shipping_cost','description','category_id','brand_id','image_path','quantity'];

    public function category()
    {
        return $this->belongsTo(TipoProducto::class, 'category_id');
    }

}
