<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    	protected $fillable['blogs', 'tags'];

    	public function user(){
    		return $this->belongsTo(User::class);
    	}
}
