<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FooterTitle
 *
 * @property $id
 * @property $title
 * @property $created_at
 * @property $updated_at
 *
 * @property FooterContent[] $footerContents
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FooterTitle extends Model
{
    
    static $rules = [
		'title' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function footerContents()
    {
        return $this->hasMany('App\Models\FooterContent', 'footer_title_id', 'id');
    }
    

}
