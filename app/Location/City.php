<?php

namespace App\Location;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function province()
    {
        return $this->belongsTo('App\Location\Province', 'province_id');
    }
}
