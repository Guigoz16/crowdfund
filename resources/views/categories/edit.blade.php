@extends('inc.main')

@section('header', 'Edit category')

@section('breadcrumb', 'Edit')

@section('content')
<div class="content-wrapper">

             <form role="form" action="{{ route('category.update',[$category->id])}}" method="POST">
                  <div class="box-header with-border">
                      <a href="{{ route('category.index')}}" class="btn btn-primary pull-right">Back</a>
                   </div>
                  <input type="hidden" id="category_id" name="category_id" value="{{$category->id}}">
                 @csrf
                 <div class="box-body">
                     <div class="form-group">
                         <label for="category_edit">Category Name</label>
                         <input type="text" class="form-control" name="category_name" id="category_edit" value="{{$category->category_name}}"></input>
                     </div>
    
                     <div class="form-group">
                         <select class="form-control" name="status" id="status">
                             <option value="1">On</option>
                             <option value="0">Off</option>
                         </select>
                     </div>
                     <div>
                         <button type="submit" class="btn btn-success">update</button>
                     </div>
                 </div>
             </form>
</div>
         

   
@endsection
