<?php

class Dog extends Model {

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function reservations()
    {
        return $this->hasOne('Reservation');
    }

}