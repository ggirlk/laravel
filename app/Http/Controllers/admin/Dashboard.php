<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index()
    {
    	$req = DB::table('users')->get();
    	return view('admin.dashboard')->with("p", $req);
    }
}
