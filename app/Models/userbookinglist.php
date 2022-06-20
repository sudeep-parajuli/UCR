<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userbookinglist extends Model
{
    use HasFactory;
    protected $table = "userbookinglists";
	protected $primary_key ="id";

	public function userList() {
    	return $this->belongsTo(User::class);
    }

	public function manager_rental_return() {
    	return $this->hasMany(ManagerRentalReturn::class);
    }
}
