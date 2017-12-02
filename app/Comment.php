<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	//Here this function tells us that one comments belongs to only one entrepreneur
    public function entrepreneur() {

    return $this->belongsTo('App\Entrepreneur'); 

   } 
   
}
