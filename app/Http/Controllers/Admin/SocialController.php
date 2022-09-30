<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function index() {
        $records = Social::query()->get();
        return view('admin.social.index', compact('records'));
    }

    public function create() {
        return view('admin.social.create');
    }

    public function store(Request $request) {
       Social::create($request->only('mobile', 'whats_app', 'email', 'address', 'facebook', 'instagram', 'linkedin', 'youtube', 'twitter'));
       return redirect()->route('admin.social.index')->with('status','Created' );
    }

    public function edit(Social $social)
    {   
        return view('admin.social.edit')-> with('record' ,$social);
    }

    public function update(Request $request, Social $social) {
        $social->update($request->only('mobile', 'whats_app', 'email', 'address', 'facebook', 'instagram', 'linkedin', 'youtube', 'twitter'));
        return redirect()->route('admin.social.index')->with('status','Updated' );
    }
}
