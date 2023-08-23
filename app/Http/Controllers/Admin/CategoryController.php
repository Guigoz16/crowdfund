<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
      public function index(Request $request)
      {
        $categories = Category::all();

        // $categories = Category::with('category')
        //   ->when($request->has('archive'), function($query){
        //     $query->onlyTrashed();
        //   })
        //   ->get();
        // ->withTrashed()
        // ->get();
        return view('categories.index')->with('categories',$categories);
      }

      public function create()

      {
          return view('categories.create');
      }

      

      public function store( Request $request )
    {
        $input = $request->validate([
            'category_name' => 'required|string|unique:categories|max:200',
            'status' => 'required'
        ]);

      try {
        $data = Category::create($input);
        if ($data) {
            return to_route('category.index')->with('message', 'Category successfully created! ');
        }

      }catch (\Throwable $th) {
        throw $th;
      }
    }

    // public function show()
    // {
    //     $category = Category::find($id);
    //     return view('category.show')->with('categories', $category);
    // }


    public function edit($id)
    {
        // dd($id);
       $category = Category::find($id);
       
       return view('categories.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
      
        $category = Category::find($id);
        // dd('working');
        $input = $request->all();
        $category->update($input);
      
        // $all = Category::all();
       
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect()->route(route: 'category.index');
    }

    public function archive()
    {
      $categories = Category::onlyTrashed()->get();
   //   dd($categories);
      return view('categories.archive',compact('categories'));
    }

    public function restore($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();
        return redirect()->route(route:'category.index');
    }

    public function forceDelete($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->forceDelete();
        return redirect()->route(route:'category.index');
    }


      
}
