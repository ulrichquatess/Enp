<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessComment extends Model
{
    //Here this function tells us that one comments belongs to Business Comments
    public function business() {

    return $this->belongsTo('App\Business'); 

   } 

}
