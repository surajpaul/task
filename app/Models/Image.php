<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'imageable_id', 'imageable_type'
    ];

	/**
	 * Get the owning imageable model.
	 */
    public function imageable()
    {
        return $this->morphTo();
    }

    /**
     * Get value of image url.
     *
     * @param  string $value
     * @return string
     */
    public function getUrlAttribute($value){
        return asset('/storage' . $value);
    }
}
