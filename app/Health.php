<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    public function Healthcomments() {

    return $this->hasMany('App\HealthComment'); 
	
	}
}
