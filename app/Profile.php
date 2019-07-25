<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ?  $this->image : "profile/bWfFKPLmjsb0JKEzwM0QEXOBSCm8w74aEfNHfqPV.png";
        return '/storage/' . $imagePath;
    }
}
