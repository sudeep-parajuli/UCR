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
        Schema::create('user_rental_returns', function (Blueprint $table) {
            $table->id();
            $table->integer("booking_number");
        	$table->string("account_name");
			$table->string("member_number");
        	$table->integer("number_of_hour_booked");
        	$table->string("device_insurance");
        	$table->string("rental_deposit");
        	$table->string("deposit_return_amount");
        	$table->string("status");
        	$table->string("item_return_condition");
        	$table->string("payment_status");
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
        Schema::dropIfExists('user_rental_returns');
    }
};
