<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function characters() {
        return $this->belongsToMany('App\Character')->withPivot('frequency', 'category');
    }
}
