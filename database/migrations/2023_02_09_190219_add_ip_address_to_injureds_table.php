<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('injureds', function (Blueprint $table) {
            $table->string('ip_address')->after('maps_link')->nullable();
        });
    }

    public function down()
    {
        Schema::table('injureds', function (Blueprint $table) {
            $table->dropColumn('ip_address');
        });
    }
};
