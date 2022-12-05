<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otps', function (Blueprint $table) {
            $table->id();
            $table->integer('token');
            $table->string('country_code', 4)->default('+62');
            $table->bigInteger('phone')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('count_sending')->default(1);
            $table->dateTime('expired_at')->nullable();
            $table->dateTime('verified_at')->nullable();
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
        Schema::dropIfExists('otps');
    }
}
