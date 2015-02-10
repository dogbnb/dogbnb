<?php

class Reservation extends Model {

    public function dog()
    {
        return $this->belongsTo('Dog');
    }

    public function location()
    {
        return $this->belongsTo('Location');
    }

}