<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{

    protected $fillable = [
        'name','age','gender','bloodgroup', 'phone','email','address','photo','status',
    ];
public function bloodgroups($value='')
{
	return $this->belongsTo('App\Bloodgroup');
}

public function user($value='')
{
	return $this->belongsTo('App\User');
}

}
