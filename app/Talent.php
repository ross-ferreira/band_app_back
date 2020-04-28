<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model

{
    protected $fillable = [
        "talent_name",
        "skill_level",
    ];
    
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
