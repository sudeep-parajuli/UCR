<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table = "cart_items";
	protected $primary_key ="id";

	public function userdetail() {
    	return $this->belongsTo(User::class);
    }
}
