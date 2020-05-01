<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model

{
    protected $fillable = [
        "talent_name",
        "skill_level",
        "member_id",
    ];

    // // Its the opposite of fillable(prevent mass assignment) but the empty array will allow all through
    // protected $guarded = []
    
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
