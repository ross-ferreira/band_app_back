<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // adding scopes
    public function scopeLocation($query)
    {
        return $query->where('location','bristol');
    }
    // We need to tell Laravel that it can accept these to fill in the database we use protect $fillable
    protected $fillable = [
        "account_type",
        "name", 
        "email",
        "date_of_birth",
        "gender",
        "distance",
        "location",
        "band_type",
        "gender_pref",
        "image",
        "about_me",
    ];

    // // if you wanted a default value for a property us something like this:
    // protected $atributes =[
    //     'location' => 'Bristol'
    // ];

    public function talents()
    {
        return $this->hasMany(Talent::class);
    }
}
