<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    static $PROFILE_VIEW = 1,
        $INTEREST_ACCEPTED = 2,
        $INTEREST_SENT = 3,
        $NEW_MATCHES = 4,
        $ADMIRES = 5,
        $ADMIRED_BY = 6;
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function source(){
        return $this->belongsTo(User::class, 'source_id');
    }

    public function saveNotification($message, $type)
    {

    }
    
    public function setDescription($type){
        
    }
}
