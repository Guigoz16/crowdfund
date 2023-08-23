@extends('inc.main')

@section('header', 'Create category')

@section('breadcrumb', 'Create')

@section('content')
<div class="content-wrapper">
 <form role="form" action="{{ route('category.store')}}" method="POST">
      @csrf
      <div class="box-header with-border" >
          <a href="{{ route('category.index')}}" class="btn btn-primary pull-right">Back</a>
      </div>
      <div class="form-group">
          <label for="inputCategory">Category Name</label>
          <input type="text" class="form-control" name="category_name" id="inputCategory"
              placeholder="Enter Category Name">
          </input>
     </div>
  

     <div class="form-group">
         <select class="form-control" name="status">
             <option value="1">On</option>
             <option value="0">Off</option>
         </select>
     </div>
      <div>
          <button type="submit" class="btn btn-success">Save</button>
      </div>
  </form>
</div>
    
@endsection