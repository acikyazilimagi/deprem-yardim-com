<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SQL = file_get_contents(__DIR__.'/dump/locations.sql');

        $SQL = Str::replace([
            'iller',
            'ilceler',
            'semtler',
            'mahalleler',

            'il_id',
            'il_adi',

            'ilce_id',
            'ilce_adi',

            'semt_id',
            'semt_adi',

            'mahalle_adi',
            'posta_kodu',

            'CREATE TABLE',
        ], [
            'cities',
            'districts',
            'streets',
            'neighborhoods',

            'city_id',
            'name',

            'district_id',
            'name',

            'street_id',
            'name',

            'name',
            'postal_code',

            'CREATE TABLE IF NOT EXISTS',
        ], $SQL);

        try {
            DB::unprepared($SQL);
        } catch (\Exception $e) {
            dd(str($e->getMessage())->limit(500)->value());
        }
    }
}
