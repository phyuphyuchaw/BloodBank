<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;

class PageController extends Controller
{
    public function home($value='')
  {
    $donors = Donor::all();
    return view('frontend.home',compact('donors'));
  }

  public function about($value='')
  {
    return view('frontend.about');
  }

  public function contact($value='')
  {
    return view('frontend.contact');
  }

  public function blog($value='')
  {
    return view('frontend.blog');
  }

  public function login($value='')
  {
    return view('frontend.login');
  }

  public function register($value='')
  {
    return view('frontend.register');
  }

  
}
