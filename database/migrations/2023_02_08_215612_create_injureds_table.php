<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('injureds', function (Blueprint $table) {
            $table->id();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('street')->nullable();
            $table->string('street2')->nullable();
            $table->string('apartment')->nullable();
            $table->string('apartment_no')->nullable();
            $table->string('apartment_floor')->comment('Kazazedenin bulunduğu kat numarası')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('fullname')->nullable();
            $table->string('source')->nullable();
            $table->string('maps_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('injureds');
    }
};
