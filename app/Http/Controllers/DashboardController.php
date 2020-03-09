<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
 
class DashboardController extends Controller
{
    public function index()
    {
    	$user = User::first();

    	return view('dashboard.index' , compact('user'));
    }
     
}
