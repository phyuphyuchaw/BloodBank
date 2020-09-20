<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodgroup extends Model
{
     protected $fillable = [
        'id','bloodgroup',
    ];
    public function donors($value='')
    {
    	return $this->hasMany('App\Donor');
    }
}
