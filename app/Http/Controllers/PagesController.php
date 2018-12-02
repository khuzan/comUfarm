<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  
  	public function home()
  	{
  		return view('dashboard',[
  			'navbrand'	=>'Dashboard'
  		]);
  	}

  	public function icons()
  	{
  		return view('icons',[
  			'navbrand'	=>'Icons'
  		]);
  	}

  	public function maps()
  	{
  		return view('maps',[
  			'navbrand'	=>'Maps'
  		]);
  	}

  	public function notifications()
  	{
  		return view('notifications',[
  			'navbrand'	=>'Notifications'
  		]);
  	}

  	public function table()
  	{
  		return view('table',[
  			'navbrand'	=>'table'
  		]);
  	}

  	public function typography()
  	{
  		return view('typography',[
  			'navbrand'	=>'Typography'
  		]);
  	}

  	public function profile()
  	{
  		return view('profile',[
  			'navbrand'	=>'Profile'
  		]);
  	}
}
