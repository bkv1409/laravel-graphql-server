<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function friends()
    {
        return $this->belongsToMany('App\Person', 'friendships', 'person_id', 'friend_id');
    }
}
