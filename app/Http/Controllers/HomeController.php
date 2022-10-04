<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home()
  {
    return view('user.home');
  }
  public function brngyportfolio()
  {
    return view('user.portfolio-details');
  }
}
