<?php

class Location extends Model {

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function reservations()
    {
        return $this->hasMany('Reservation');
    }

}
