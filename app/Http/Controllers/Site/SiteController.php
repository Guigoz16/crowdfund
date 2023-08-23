<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\about;
use Illuminate\Http\Request;
use App\Models\cause;
use App\Models\Category;
use App\Models\donation;

class SiteController extends Controller
{
    public function master()
    {
        $abouts = about::all();
        $causes = cause::all();
        return view('master', compact('causes', 'abouts'));
    }

    public function faq()
    {
        return view('layouts.faq');
    }


    public function about()
    {
        $abouts = about::all();
        return view('about')->with('abouts' , $abouts);
    }


    public function category()
    {
        $categories = Category::where('status', '1')->get();
        return view('categories.main' , compact('categories'));
    }

    
    public function main()
    {
        
        $causes = cause::where('cause_status', '1')->get();
        $allDonations = donation::all();
        // dd($allDonations);
        $total = 0;
        $totalDonations = [];
        $progress = [];

        $activeCauses = [];

        foreach ($causes as $cause) {

            foreach ($allDonations as $d) {
                if ($cause->id == $d->cause_id) {
                    $total += $d->donate_amount;
                }
            }
            
            $cause->update(['total_amount' => $total]);
            $checkProgress = (int)(((int)$total * 100)/(int)$cause->cause_goal);
            $totalDonated = $total;   
                $total = 0;
            


            if($checkProgress<100){
                array_push($totalDonations, $totalDonated);
                array_push($activeCauses, $cause);
                array_push($progress,$checkProgress);
            }

            

        }

       




        
        
        return view('causes.main' , compact('activeCauses','progress','totalDonations'));
    }

    public function collection($id)
    {
        $category = Category::where('id', $id)->where('status', '1')->first();
        if($category){
            $causes = cause::where('category_id', $category->id)->where('cause_status', '1')->get();
            return view('layouts.collection', compact('category', 'causes'));
        }else{
            return redirect()->back();
        }

    }

    public function causeDetails(Request $request, $id)
    {
        $causes = cause::findOrFail($id);
        $categories = Category::where('status', 1)->get();

        $allCauses = cause::all();
        $related = [];
        foreach($allCauses as $ac){
            if ($ac->category_id == $causes->category_id && $ac->id != $causes->id) {

                array_push($related, $ac);
                
            }
        }
      
        return view('causes.cause_detail')->with('causes',$causes)->with('categories',$categories)->with('related',$related);
    }
 
}
