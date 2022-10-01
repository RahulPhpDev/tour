<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'mobile' => 'required|integer',
            'adult' => 'required',
            'child' => 'required',
            'date' => 'required|date',
        ]);
        $enquiry = Enquiry::query()->create(
            $request->only('name', 'email', 'mobile', 'adult', 'child', 'date')
        );
        
        $encryptID = Crypt::encryptString($enquiry->id);
        return redirect()->route('enquiry.thank', $encryptID);

    }

    public function thank($encryptID) {
        
        $decryptId = Crypt::decryptString($encryptID);
        $enquiry = Enquiry::findOrFail( $decryptId);
        return view('frontend.utils.thank-you', compact('enquiry'));
    }
}
