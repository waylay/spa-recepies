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
      $latest_recipes = Recipe::latest()->take(4)->get();
      $popular_recipes = Recipe::popular()->take(4)->get();
      return view('pages.landing',compact('latest_recipes','popular_recipes'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
      $recipes = Recipe::latest()->get();
      return view('pages.dashboard');
    }
}
