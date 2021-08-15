<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
   protected $fillable = [
        'user_name', 'pickup','drop_off','food', 'number', 'drink','event_name'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function events()
    {
        return $this->belongsTo('App\Event');
    }
}
