<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $fillable = ['artist', 'name', 'description', 'media', 'price']; // Tell HTTP 
																			   // request which
																			   // parameters to
																			   // expect.	 
	/*
	public function setMedia($media) 
	{
	    $filename = time() . '.' . $media->getClientOriginalExtension();
	    \Image::make($media)->save(public_path('/images/countries/' . $filename));
	    $this->media = $filename;
	    $this->save();
	}
	*/
}
