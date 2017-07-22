<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function places() {
        return $this->belongsToMany('App\Place')->withPivot('frequency', 'category');
    }
}
