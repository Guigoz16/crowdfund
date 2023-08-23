<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Donation;
use App\Models\Category;
use App\Models\Cause;
use App\Models\About;




use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
  public function dashboard(){
    $totalCauses = Cause::count();
    $totalCategories = Category::count();
    $totalAbouts = About::count();

    $totalAllUsers = User::count();
   // $totalUser = User::where('role_as', '0')->count();
    //$totalAdmin = User::where('role_as', '1')->count();
    

    $todayDate = Carbon::now()->format('d-m-Y');
    $thisMonth = Carbon::now()->format('m');
    $thisYear = Carbon::now()->format('Y');

    $totalDonation = Donation::count();
    $todayDonation = Donation::whereDate('created_at', $todayDate)->count();
    $thisMonthDonation = Donation::whereMonth('created_at', $thisMonth)->count();
    $thisYearDonation = Donation::whereYear('created_at', $thisYear)->count();


    return view('index', compact('totalCauses', 'totalCategories', 'totalAbouts', 'totalDonation', 'totalAllUsers',  'todayDonation', 'thisMonthDonation', 'thisYearDonation'));
  }
}
