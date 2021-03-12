<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table = 'tbl_user';
    protected $fillable = ['username', 'email', 'jabatan', 'password'];
}
