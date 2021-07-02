<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable=[
   	'category_id'
   ];
    public function image()
    {
    	return $this->hasOne('App\Image');
    }
    public function category(){
    	return $this->belongsTo(Category::class);
    }
}
