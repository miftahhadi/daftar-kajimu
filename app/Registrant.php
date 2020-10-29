<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    protected $guarded = [];

    public function personal()
    {
        return $this->hasOne(Personal::class);
    }

}
