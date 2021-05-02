<?php

namespace App\Models;
use Workshop;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	// relation without any constraints ...works fine 
    public function getAllWorkshop() {
        return $this->hasMany(Workshop::class);
    }
}
