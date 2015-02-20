<?php

class Dog extends Eloquent {

        protected $table = 'dogs';


//     public static $rules = array(
//     'dog_name'      => 'required|max:200',
//     'dog_size'        => 'required|max:6'
// );

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function reservation()
    {
        return $this->hasOne('Reservation');
    }

}