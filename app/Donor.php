<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{

    protected $fillable = [
        'user_id','age','gender','bloodgroup', 'phone','email','address','profile','posting_date',
    ];
public function bloodgroups($value='')
{
	return $this->belongsTo('App\Bloodgroup');
}
}
