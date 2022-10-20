<?php

namespace App\Http\Controllers;


use App\Models\{
    Package,
    Destination,
    Category,
    Social
};
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        $packages = Package::limit(20)->get()->sortByDesc('id');
        $destination = Destination::limit(20)->get()->sortByDesc('id');
        return view('frontend.home' , compact('packages', 'destination'));
    }

    public function show($slug) {
        $packages = Package::query()->whereSlug($slug)->first();
        return view('frontend.package.index', compact('packages', 'slug'));

    }

    public function about() {
        return view('frontend.about.index');
    }

    public function contactUs() {
        $app_social = Social::first();
        return view('frontend.utils.contact-us', compact('app_social'));
    }

    public function theme($slug) {
        $categories =  Category::query()
                        ->whereHas('package')
                        ->with(['package' => function ($query) {
                            $query->whereIn('completed_step', [4,5]);
                        }])
                        ->whereSlug($slug)->get();
        return view('frontend.theme.index', compact('categories', 'slug'));
    }
}
