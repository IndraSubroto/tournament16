<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'title','description','minPrice','maxPrice','minAge','maxAge','dateRegisLimit','dateInitial','dateFinal','district_id','user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function district()
    {
        return $this->belongsTo('App\Location\District', 'district_id');
    }
}
