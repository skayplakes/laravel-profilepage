<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    function showFriends() {
    	$user = User::all();

    	return view('profilepage/profile_page', compact('user'));
    }
}
