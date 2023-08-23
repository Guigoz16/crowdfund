<?php

namespace App\Http\Controllers\Site;
use App\Models\Cause;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public $donate_name, $donate_email;
    public function index($id)
    {
        $causes = Cause::find($id);
        
        return view('donations.index', compact('causes'));
    
    }

    public function store(Request $request) 
    {
        $request->validate([
            'donate_name' => 'required|string|max:100',
            'donate_email' => 'required|string|max:100',
        ]);

        $dataArray = array(
            'donate_name' => $request->donate_name,
            'donate_email' => $request->donate_email,
        );
        return redirect()->route('stripe');
    }
}
