<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $guarded =[];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
