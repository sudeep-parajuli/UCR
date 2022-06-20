<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $table = "devices";
	protected $primary_key = "id";

	protected $fillable = ["brand", "model", "operating_system", "RAM", "hdmiport_available", "number_of_usb_port", "hourly_cost", "displaysize"];

	public function device_user() {
	return $this->belongsTo(User::class);
	 
    }
}
