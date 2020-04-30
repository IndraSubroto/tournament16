<?php

namespace App\Location;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function city()
    {
        return $this->belongsTo('App\Location\City', 'city_id');
    }
}
