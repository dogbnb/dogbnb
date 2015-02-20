<?php

class Location extends Eloquent {

    protected $table = 'locations';

//     public static $rules = array(
//     'street_number' => 'required|max:100',
//     'street_name'   => 'required|max:10000',
//     'city'          => 'required|max:250',
//     'state'         => 'required|max:100',
//     'country'       => 'required|max:100',
//     'latitude'      => 'required|max:40',
//     'longitude'     => 'required|max:40'
//     // description if host?
// );

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
