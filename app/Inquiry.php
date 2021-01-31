<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    /* protected $fillable=['user_id', 'name', 'email', 'subject', 'message', 'status']; */
    public function inquiryToAdmin(){

        return $this->belongsToMany(InquiryToAdmin::class);

    }
}
