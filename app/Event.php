<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $fillable = ['id','user_id','event_name','event_date','event_time',
    'event_location','organizer_name','image_path','organizer_email','organizer_phone','event_description'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function invitations()
    {
        return $this->hasMany('App\Invitation');
    }
}
