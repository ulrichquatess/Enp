<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistComment extends Model
{
       //Here this function tells us that one comments belongs to Health Comments
    public function artist() {

    return $this->belongsTo('App\Artist'); 

   } 
}
