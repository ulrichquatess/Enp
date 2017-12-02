<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
     public function technologycomments() {

    return $this->hasMany('App\TechnologyComment'); 

   }
}
