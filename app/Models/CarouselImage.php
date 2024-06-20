<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CarouselImage
 *
 * @property $id
 * @property $image_path
 * @property $order
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CarouselImage extends Model
{

  static $rules = [
    'image_path' => 'nullable|image|mimes:png,jpg|max:10048',
    'order' => 'nullable|integer'
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['image_path', 'order'];

  public static function boot()
  {
    parent::boot();

    static::creating(function ($carouselImage) {
      // This will only work if the id is assigned before the insert
      // Typically, this is not the case with auto-incrementing ids
      // Use saving event instead if id is auto-incrementing
      if (is_null($carouselImage->order)) {
        $carouselImage->order = self::max('id') + 1; // Get the next available ID
      }
    });
  }
}
