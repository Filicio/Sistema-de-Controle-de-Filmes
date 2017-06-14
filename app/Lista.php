<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    public function filme()
    {
        return $this->belongsTo('App\Filme');
    }
}
