<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('order_requirements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->string('name');
            $table->tinyInteger('customer_sex')->nullable();
            $table->string('phone');
            $table->string('city');
            $table->string('address');
            $table->timestamp('service_due');
            $table->tinyInteger('therapist_sex')->nullable();
            $table->tinyInteger('style_type_sex')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_requirements');
    }
}
