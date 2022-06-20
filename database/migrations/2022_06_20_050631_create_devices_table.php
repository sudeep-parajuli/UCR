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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
        	$table->string("brand");
        	$table->string("model");
        	$table->string("operating_system");
        	$table->string("RAM");
        	$table->string("hdmiport_available");
        	$table->integer("number_of_usb_port");
        	$table->decimal('hourly_cost', $precision = 4, $scale = 2);
        	$table->decimal('display_size', $precision = 3, $scale = 2);
        	$table->string("availability");
        	// $table->foreign("user_id")->references("id")->on("Users")->onDelete("cascade");
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
        Schema::dropIfExists('devices');
    }
};
