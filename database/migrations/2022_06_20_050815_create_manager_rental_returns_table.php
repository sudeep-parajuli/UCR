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
        Schema::create('manager_rental_returns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("booking_id");
            $table->unsignedBigInteger("user_id");
        	$table->string("device_brand");
        	$table->string("model");
        	$table->integer("number_of_hour_booked");
        	$table->integer("quantity");
        	$table->float("amount_paid");
        	$table->string("status")->default("Active")->nullable();
            $table->foreign("booking_id")->references("id")->on("userbookinglists")->onDelete("cascade");
        	$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
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
        Schema::dropIfExists('manager_rental_returns');
    }
};
