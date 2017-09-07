<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    static $PROFILE_VIEW = 1,
        $INTEREST_ACCEPTED = 2,
        $INTEREST_SENT = 3,
        $NEW_MATCHES = 4,
        $ADMIRE_MADE = 5,
        $ADMIRE_FROM = 6;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function saveNotification($message, $type)
    {

    }
}
