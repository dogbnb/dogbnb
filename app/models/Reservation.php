<?php

class Reservation extends Eloquent {

    public function dog()
    {
        return $this->belongsTo('Dog');
    }

    public function location()
    {
        return $this->belongsTo('Location');
    }

}