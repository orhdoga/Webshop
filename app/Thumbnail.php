<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    public function countries() {
    	return $this->hasMany(Country::class);	
    }

    public function fashionModels() {
    	return $this->hasMany(FashionModel::class);	
    }

    public function news() {
    	return $this->hasMany(News::class);	
    }
}
