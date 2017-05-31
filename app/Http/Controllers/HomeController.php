<?php

namespace App\Http\Controllers;

use Auth;
use App\Country;
use App\Address;
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

    public function userUpdate(Request $request){
        User::where('id', Auth::user()->id)
            ->update([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email')
            ]);
    }

    public function countries() {
        return Country::all();
    }

    public function addresses() {
        return Address::with('country')->where('user_id', Auth::user()->id)->get();
    }
}
