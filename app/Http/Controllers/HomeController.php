<?php

namespace App\Http\Controllers;

use Auth;
use App\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function user() {
        return Auth::user();
    }

    public function countries() {
        return Country::all();
    }
}
