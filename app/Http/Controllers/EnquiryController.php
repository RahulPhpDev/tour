<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;


class EnquiryController extends Controller
{
    public function store(Request $request)
    {

        Enquiry::query()->create(
            $request->only('name', 'email', 'mobile', 'adult', 'child', 'date')
        );

    }
}
