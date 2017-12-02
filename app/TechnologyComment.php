<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechnologyComment extends Model
{
       //Here this function tells us that one comments belongs to Technology Comments
    public function technology() {

    return $this->belongsTo('App\technology'); 

   } 
}
