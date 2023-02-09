<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;
use App\Models\Injured;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function scopeActiveCities($query)
    {
        return $query->whereIn('name', Injured::getActiveCities());
    }
}
