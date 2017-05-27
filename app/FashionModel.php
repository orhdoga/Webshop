<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FashionModel extends Model
{
	protected $fillable = ['artist', 'name', 'description', 'media', 'price']; // Tell HTTP 
}																			   // request which
																			   // parameters to
																			   // expect.	 
