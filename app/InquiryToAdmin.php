<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InquiryToAdmin extends Model
{
    public function participants()
{
    return $this->belongsToMany('Namespace\Modules\Email\Models\Participant', 'PIVOT', 'message_id', 'user_id')->withTimestamps();
}

    public function inquiry(){
        return $this->belongsToMany(Inquiry::class);
    }
}
