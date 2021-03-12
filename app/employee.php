<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'tbl_employee';
    protected $fillable = ['username', 'email', 'jabatan', 'password'];
}
