<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{

    protected $fillable = [
        'name','age','gender','bloodgroup', 'phone','email','address','photo','postingdate',
    ];
public function bloodgroups($value='')
{
	return $this->belongsTo('App\Bloodgroup');
}
}
