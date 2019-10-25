<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public function field()
	{
		return $this->belongsTo(Field::class, 'field_id');
	}

    public function getFirstImageAttribute()
    {
    	$images = json_decode($this->images);
    	return is_array($images) && $images[0] ? $images[0] : 'frontend/asset/img/work-1.jpg';
    }

    public function getImagesListeAttribute()
    {
    	return json_decode($this->images);
    }
}
