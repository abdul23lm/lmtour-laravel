<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $members = User::count();
        $countries = TravelPackage::count('location');
        $packages = TravelPackage::count('title');
        $items = TravelPackage::with(['galleries'])->get();
        return view(
            'pages.home',
            compact(
                'members',
                'countries',
                'packages',
                'items'
            )
        );
    }
}
