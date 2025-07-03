<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Model;


class Treatment extends Model
{
     protected $casts = [
        'price' => MoneyCast::class,
    ];

   public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
