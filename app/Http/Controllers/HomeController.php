<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRole;
use App\Promotor;
use App\Role;
use App\Tournament;
use App\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tournaments_count = Tournament::all()->count();
        $promotors_count = Promotor::all()->count();
        $members_count = User::where('role_id',3)->count();

        return view('home',compact('tournaments_count','promotors_count','members_count'));
    }
}
