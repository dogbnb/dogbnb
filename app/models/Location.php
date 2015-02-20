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

    // Distance raw query
    public function scopeDistance($query, $lat, $lng, $radius, $unit = "mi")
    {
        $unit = ($unit === "mi") ? 3963.17 : 6378.10;
        $lat = (float) $lat;
        $lng = (float) $lng;
        $radius = (double) $radius;
        return $query->select(DB::raw("*
                        FROM (
                            SELECT *,
                                   ($unit * ACOS(COS(RADIANS($lat))
                                             * COS(RADIANS(latitude))
                                             * COS(RADIANS($lng) - RADIANS(longitude))
                                             + SIN(RADIANS($lat))
                                             * SIN(RADIANS(latitude)))) AS distance")
                     )
                    ->whereRaw("latitude
                          BETWEEN $lat  - ($radius / 69)
                              AND $lat  + ($radius / 69)
                           AND longitude
                          BETWEEN $lng - ($radius / (69 * COS(RADIANS($lat))))
                              AND $lng + ($radius / (69 * COS(RADIANS($lat))))
                          ) d WHERE distance <= $radius");
    }

    
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
