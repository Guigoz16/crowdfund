<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\About;

class aboutController extends Controller
{
    public function index()
    {
       $abouts = about::all();
       return view('abouts.index', compact('abouts'));
    }

    
 
    public function create(){
        return view('abouts.create');
    }
   
 
    public function store(Request $request )
 {

        $address = [$request->twitter,$request->facebook,$request->linkedin,$request->instagram];

     $image4 =$request->file('image');
     $slug = Str::slug($request->title);
     if(isset($image4)){
         $currentDate = Carbon::now()->toDateString();
         $postphoto = $slug . '-' . $currentDate . '-' .uniqid() . '.' . $image4->getClientOriginalExtension();

         if (!file_exists('uploads/image')){
             mkdir('uploads/image',0777,true);

         }
         
         $image4->move('uploads/image',$postphoto);
        
     } else{
         $postphoto = "default.png";
     }

             // dd($address);
             $dataArray = array(
                'name' => $request->name,
                'position'=> $request->position,
                'social_media_address' => $address,
                'image' => $postphoto
             );
     try {
    
        about::create($dataArray);
        return redirect()->route('about.index')->with('message', 'about successfully created!');

    } catch (\Throwable $th) {
        throw $th;
    }

  }

  public function edit($id)
    {
       $about = about::find($id);
        return view('abouts.edit',compact('abouts'));
    }

    public function update(Request $request,$id)
    {
      
        $about = about::find($id);
        $dataArray = $request->all();
        $about->update($dataArray);
        return redirect()->route('about.index')->with('success', 'about updated successfully!');
    }

    public function destroy($id)
    {
        $about=about::findOrFail($id);
        $about->delete();
        return redirect()->route(route: 'about.index')->with('success', 'about deleted successfully!');
    }

 
}
