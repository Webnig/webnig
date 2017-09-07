<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function interestShownIn(){
       return $this->hasMany(Interest::class, 'source_id');
    }

    public function interestShownFrom()
    {
        return $this->hasMany(Interest::class, 'target_id');
    }

    public function notifications(){
        return $this->hasMany(Notification::class);
    }

    public function outGoingNotifications(){
        return $this->hasMany(Notification::class, 'source_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function savedSearches()
    {
        return $this->hasMany(SavedUserSearches::class);
    }
}
