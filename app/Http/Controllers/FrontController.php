<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index' );
    }
    public function about()
    {
        return view('frontend.about' );
    }
    public function contact()
    {
        return view('frontend.gym_rating' );
    }
    public function faq()
    {
        return view('frontend.compare' );
    }
    public function single_gym()
    {
        return view('frontend.single_gym' );
    }
    public function filter()
    {
        return view('frontend.filter' );
    }
    public function fregister()
    {
        return view('frontend.fregister' );
    }
    public function flogin()
    {
        return view('frontend.flogin' );
    }
    public function user_pannel()
    {
        return view('frontend.user_pannel' );
    }
     public function terms()
    {
        return view('frontend.terms_condetions' );
    }
      public function privacy()
    {
        return view('frontend.privacy' );
    }
}
