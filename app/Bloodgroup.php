<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodgroup extends Model
{
     protected $fillable = [
        'id','name','bloodgroup','unit','posting_date',
    ];
    public function donors($value='')
    {
    	return $this->hasMany('App\Donor');
    }
}
