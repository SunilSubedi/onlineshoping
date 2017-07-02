<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public funnction product()
    {
    	return $this->belongsTo('App\Product');
    }
 
}
