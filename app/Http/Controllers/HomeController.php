<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessFailedHomePageVisit;
use App\Jobs\ProcessHomePageVisit;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()) {
            ProcessHomePageVisit::dispatch(Auth::user());
        } else {
            ProcessFailedHomePageVisit::dispatch();
        }
        return view('home');
    }
}
