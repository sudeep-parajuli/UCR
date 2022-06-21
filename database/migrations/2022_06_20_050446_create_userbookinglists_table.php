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
        Schema::create('userbookinglists', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
        	$table->string("device");
	        $table->string("model");
        	$table->integer("number_of_hour_booked");
        	$table->integer("quantity");
        	$table->float("amount_paid");
        	$table->string("status")->default("Active")->nullable();
        	$table->foreign("user_id")->references("id")->on("Users");
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
        Schema::dropIfExists('userbookinglists');
    }
};
