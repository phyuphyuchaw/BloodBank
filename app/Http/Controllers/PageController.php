<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\Bloodgroup;
use App\Blog;
use DB;

class PageController extends Controller
{
  public function home($value='')
  {
    $donors = Donor::all();
    $bloodgroups = Bloodgroup::all();
    return view('frontend.home',compact('donors','bloodgroups'));
  }

  public function showLogin (){
        return view('frontend.login');
  }

   public function showRegister (){
    return view('frontend.register');
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
    $blogs= Blog::all();
    return view('frontend.blog',compact('blogs'));
  }

  public function detail($value='')
  {
    $blogs= Blog::all();
    return view('frontend.detail',compact('blogs'));
  }



  public function donorinfo($value='')
  {
    $bloodgroups= Bloodgroup::all();
    return view('frontend.donorinfo',compact('bloodgroups'));
  }

  public function donorlist($id)
  {
    //dd($id);
    $donors = Donor::where([
      ['status', '=', '1'],
      ['bloodgroup', '=', $id],
    ])->get();
    return view('frontend.donorlist',compact('donors'));
  }

  
}
