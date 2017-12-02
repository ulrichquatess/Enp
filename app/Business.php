<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
     public function businesscomments() {

    return $this->hasMany('App\BusinessComment'); 

   }
}
