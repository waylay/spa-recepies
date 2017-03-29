<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')
        ->only('dashboard');
    }

    /**
     * Show the application landing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
      $recipes = Recipe::with('user')->latest()->take(8)->get();
      return view('pages.landing',compact('recipes'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
      $recipes = Recipe::with('user')->latest()->get();
      return view('pages.dashboard');
    }
}
