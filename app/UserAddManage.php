<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddManage extends Model
{
    protected $fillable=['name','email','phone','role','status'];
}
