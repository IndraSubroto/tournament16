<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'team_name','tournament_id','user_id'
    ];

    public function tournament()
    {
        return $this->belongsTo('App\Tournament','tournament_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
