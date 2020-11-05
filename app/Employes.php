<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    //

    public function listings(){

         
        return $this->belongsTo('App/Listing');
    }
}
