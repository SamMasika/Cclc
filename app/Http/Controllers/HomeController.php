<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $team=Team::where('flug',1)->get();
        $service=Service::where('flug',1)->get();
        $partner=Partner::where('flug',1)->get();
        return view('layouts.master',compact('team','service','partner'));
    }
}
