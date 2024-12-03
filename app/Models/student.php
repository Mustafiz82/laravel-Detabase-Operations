<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $primaryKey = 'Id';

    //Ansestor example
    function getNameAttribute($a){
        return ucfirst($a)." Rahman";
    }

    //Mutator example
    function setNameAttribute ($val){
        // $this->attributes['Name'] = ucfirst($value);
        $this->attributes['Name'] = ucfirst($val);
    }
}
