<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthComment extends Model
{
       //Here this function tells us that one comments belongs to Health Comments
    public function health() {

    return $this->belongsTo('App\Health'); 

   } 
}
