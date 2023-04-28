<?php

namespace App\Http\Controllers\Auth;

use App\Models\Team;
use App\Models\User;
use App\Models\Company;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    
    public function index()
    {
        $team=Team::where('flug',1)->count();
        $service=Service::where('flug',1)->count();
        $user=User::where('flug',1)->count();
        $partner=Partner::where('flug',1)->count();
        $company=Company::where('flug',1)->first();
        return view('layouts.back.dashboard',compact('team','service','user','partner','company'));
    }

  
}
