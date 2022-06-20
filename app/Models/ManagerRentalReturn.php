<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerRentalReturn extends Model
{
    use HasFactory;
    protected $table = "manager_rental_returns";
	protected $primary_key ="id";

	public function rental_return() {
    	return $this->belongsTo(User::class);
    }

	public function rental_return_manager() {
    	return $this->belongsTo(userbookinglist::class);
    }
}
