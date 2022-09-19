<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        $packages = Package::limit(20)->get()->sortByDesc('id');
        $destination = Destination::limit(20)->get()->sortByDesc('id');
//        dd($packages);
        return view('frontend.home' , compact('packages', 'destination'));
    }
}
