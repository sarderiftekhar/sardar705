<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Agent extends Model
{
    protected $guarded =[];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
