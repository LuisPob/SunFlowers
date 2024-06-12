<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FooterContent
 *
 * @property $id
 * @property $content
 * @property $link
 * @property $footer_title_id
 * @property $created_at
 * @property $updated_at
 *
 * @property FooterTitle $footerTitle
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FooterContent extends Model
{
    
    static $rules = [
		'content' => 'required',
		'link' => 'nullable',
		'footer_title_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['content','link' , 'footer_title_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function footerTitle()
    {
        return $this->hasOne('App\Models\FooterTitle', 'id', 'footer_title_id');
    }
    

}
