<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    
    public function artistcomments() {

    return $this->hasMany('App\ArtistComment'); 
	
	}
}
