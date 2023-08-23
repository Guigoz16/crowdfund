<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Str;


use App\Models\cause;
use Illuminate\Http\Request;

class CauseController extends Controller
{
      public function index()
      {
         $causes = Cause::all();
         return view('causes.index')->with('causes',$causes);
      }
   
 
 
        public function create(){
            $categories = Category::all();
            // dd($categories);
            return view('causes.create', compact('categories'));
        }
       
     
        public function store(Request $request )
     {
        // dd($request->file('image'));
         $attr = $request->validate([
             'cause_name' => 'required|string|unique:causes|max:200',
             'cause_status' => 'required'
         ]);
       
                  $dataArray = array(

            'category_id' => $request->category_id,
            'cause_name' => $request->cause_name,
            'cause_image' => $request->file('image'),
            'cause_goal' => $request->cause_goal,
            'cause_description' => $request->cause_description,
            'cause_userId' => $request->cause_userId,
            'cause_status' => $request->cause_status,
            'cause_address' => $request->cause_address,
            'cause_completionDate' => $request->cause_completionDate
         );
         $image3 =$request->file('image');
         $slug = Str::slug($request->title);
         if(isset($image3)){
             $currentDate = Carbon::now()->toDateString();
             $postphoto = $slug . '-' . $currentDate . '-' .uniqid() . '.' . $image3->getClientOriginalExtension();
 
             if (!file_exists('uploads/image')){
                 mkdir('uploads/image',0777,true);
 
             }
             
             $image3->move('uploads/image',$postphoto);
            
         } else{
             $postphoto = "default.png";
         }
         try {
        
            cause::create([
                'category_id' => $request->category_id,
                'cause_name' => $request->cause_name,
               'cause_image' => $postphoto,
               'cause_description' => $request->cause_description,
               'cause_goal' => $request->cause_goal,
               'cause_address' => $request->cause_address,
               'cause_completionDate' => $request->cause_completionDate,
               'cause_userId' => $request->cause_userId,
               'cause_status' => $request->cause_status
              

            ]);
            return redirect()->route('cause.index')->with('message', 'cause successfully created!');

        } catch (\Throwable $th) {
            throw $th;
        }
 
    }

    public function edit($id)
    {            $categories = Category::all();

        $cause = cause::find($id);
        return view('causes.edit',compact('cause','categories'));
    }

    public function update(Request $request,$id)
    {
        $cause = cause::find($id);
        $dataArray = $request->all();
        $cause->update($dataArray);
        return redirect()->route('cause.index')->with('success', 'Cause updated successfully!');
    }

    public function destroy($id)
    {
        $cause=cause::findOrFail($id);
        $cause->delete();
        return redirect()->route(route: 'cause.index')->with('success', 'cause deleted successfully!');
    }

    public function archive()
    {
        
      $causes = cause::onlyTrashed()->get();
      return view('causes.archive',compact('causes'));
    }

    public function restore($id)
    {
        cause::onlyTrashed()->find($id)->restore();
        return redirect()->route(route:'cause.index')->with('success', 'cause restored successfully!');
    }

    public function forceDelete($id)
    {
        $cause = cause::onlyTrashed()->findOrFail($id);
        $cause->forceDelete();
        return redirect()->route(route:'cause.index');
    }
}

