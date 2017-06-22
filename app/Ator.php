<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    public function filme() {
        return $this->belongsTo(Filme::class);
    }
}
