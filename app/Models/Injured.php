<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Injured extends Model
{
    use HasFactory;

    public function scopeActiveCities($query)
    {
        return $query->whereIn('city', self::getActiveCities());
    }

    public static function getActiveCities() {
        return [
            "Adana",
            "Adıyaman",
            "Diyarbakır",
            "Gaziantep",
            "Hatay",
            "Kahramanmaraş",
            "Kilis",
            "Malatya",
            "Osmaniye",
            "Şanlıurfa"
        ];
    }
}
