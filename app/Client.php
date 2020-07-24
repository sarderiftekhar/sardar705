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
    public function setFirstNameAttribute($value) 
    {
        $this->attributes['first_name'] = ucfirst($value);
    }
    public function setLastNameAttribute($value) 
    {
        $this->attributes['last_name'] = ucfirst($value);
    }
    public function setEmail($value) 
    {
        $this->attributes['email'] = strtolower($value);
    }


}

