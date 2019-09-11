<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];
    
    public function profileImage() {
        return ($this->image) ? '/storage/' .$this->image : '/storage/profile/vdiDcF0gVVXsMgVrRMK9uXfCav85pvK9NWzq4obp.png';
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }

    public function user() {
    	return $this->belongsTo(User::class);
    }
}
