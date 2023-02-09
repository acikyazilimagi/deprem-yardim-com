<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function street()
    {
        return $this->belongsTo(Street::class);
    }
}
