<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded=[];
    
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

}

