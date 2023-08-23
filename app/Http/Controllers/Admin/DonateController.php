<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\donation;
use Illuminate\Http\Request;


class DonateController extends Controller
{
    public function donate()
    {
        $donation = donation::all();
        return view('donations.donation', compact('donation'));
    
    }
}
