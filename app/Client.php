<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=['name', 'email', 'phone', 'address', 'status', 'payment_status', 'logo', 'add_client_url', 'show_on_home_page', 'flag'];
}
