<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalHistory extends Model
{
    use HasFactory;
    use HasFactory;
	protected $table = "rental_histories";
	protected $primary_key ="id";

	public function rental_history() {
    	return $this->belongsTo(User::class);
    }
}
