<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodgroup extends Model
{
     protected $fillable = [
        'id','blood_type','unit','postingdate',
    ];
    public function donors($value='')
    {
    	return $this->hasMany('App\Donor');
    }
}
