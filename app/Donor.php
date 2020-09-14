<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{

    protected $fillable = [
        'user_id','age','gender','bodyweight','bloodgroup', 'phone','email','address','profile','password','confirm_password','posting_date',
    ];

}
