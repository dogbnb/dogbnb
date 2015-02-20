<?php

class Reservation extends Eloquent {

    
//     public static $rules = array(
//     'in_at'         => 'required|max:20',
//     'out_at'        => 'required|max:20',
//     'location_id'   => 'required|max:10000',
//     'dog_id'        => 'required|max:10000'
// );

    public function dog()
    {
        return $this->belongsTo('Dog');
    }

    public function location()
    {
        return $this->belongsTo('Location');
    }

}