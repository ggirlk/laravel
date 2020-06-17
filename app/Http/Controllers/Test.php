<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    public function signup($r Request)
    {
    	$req = DB::table('users')->get();
    	return view('signup');
    }
}
