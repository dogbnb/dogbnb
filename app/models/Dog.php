<?php

class Dog extends Model {

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function reservation()
    {
        return $this->hasOne('Reservation');
    }

}