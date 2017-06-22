<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }
}
