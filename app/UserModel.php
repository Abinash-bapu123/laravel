<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primeryKey = 'user_id';
    protected $fillable = array('user_id','password');
    public $timestamps = false;
}
