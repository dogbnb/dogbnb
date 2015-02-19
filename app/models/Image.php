<?php

class Image extends Eloquent {

	// protected $fillable = [];

    // protected $table = 'images';

    public function location()
    {
        return $this->belongsTo('Location');
    }


}
