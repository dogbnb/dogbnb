<?php

class Location extends Eloquent {

    protected $table = 'locations';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function reservations()
    {
        return $this->hasMany('Reservation');
    }

    public function images()
    {
        return $this->hasMany('Image');
    }

}
