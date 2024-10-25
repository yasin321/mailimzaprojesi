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
        Schema::create('firmas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('firma_ad')->nullable();
            $table->string('firma_adres')->nullable();
            $table->string('firma_eposta')->nullable();
            $table->string('firma_gsm')->nullable();
            $table->string('firma_tel')->nullable();
            $table->string('firma_website')->nullable();
            $table->string('firma_logo')->nullable();

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
        Schema::dropIfExists('firmas');
    }
};
