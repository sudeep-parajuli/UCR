<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function userreturn() {
    	$listlist = User::where("id", "=", 1);
    	return view("rentalreturn", compact("listlist"));
    }

}
