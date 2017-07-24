<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $fillable = ['message'];
	
    public function user() {
    	{
    		//sets up the relationship between User model and Message model
    		return $this->belongsTo(User::class);
    	}
    }
}
