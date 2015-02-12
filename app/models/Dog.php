<?php

class Dog extends Eloquent {

        protected $table = 'dogs';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function reservation()
    {
        return $this->hasOne('Reservation');
    }

}