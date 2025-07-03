<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
}
