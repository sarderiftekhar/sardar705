<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agent;

class AgentAreaCover extends Model
{
    protected $guarded = [];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
}
