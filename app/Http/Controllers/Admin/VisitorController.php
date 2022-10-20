<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function create() {
        $record = Visitor::first();
        return view('admin.visitor.create', compact('record'));
    }

    public function store(Request $request) {
        Visitor::first()->update($request->only('number'));
        return redirect()->route('admin.visitor.create')->with('status', 'Created');
    }
}
