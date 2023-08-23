@extends('inc.main')

@section('header', 'Create about')

@section('breadcrumb', 'Create')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>abouts</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">abouts</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
 <form role="form" action="{{ route('about.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="box-header with-border" >
          <a href="{{ route('about.index')}}" class="btn btn-primary pull-right">Back</a>
      </div>
      <div class="form-group">
          <label for="inputabout">Name</label>
          <input type="text" class="form-control" name="name" id="inputabout"
              placeholder="Enter about Name">
          </input>
     </div>
     <div class="form-group">
        <label for="position">Position</label>
        <input type="text" class="form-control" name="position" id="position"
            placeholder="Enter position">
        </input>
    </div>
     <div class="form-group">
        <label for="image">Image</label>
        <input type="file" id="image" name="image">
     </div>
     <div class="form-group">
        <label for="twitter" class="form-label">twitter URL</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="twitter" aria-describedby="basic-addon3" name="twitter">
        </div>
    </div>
    <div class="form-group">
        <label for="facebook" class="form-label">facebook URL</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="facebook" aria-describedby="basic-addon3" name="facebook">
        </div>
    </div>
    <div class="form-group">
        <label for="linkedin" class="form-label">linkedin URL</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="linkedin" aria-describedby="basic-addon3" name="linkedin">
        </div>
    </div>
    <div class="form-group">
        <label for="instagram" class="form-label">instagram URL</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="instagram" aria-describedby="basic-addon3" name="instagram">
        </div>
    </div>
      <div>
          <button type="submit" class="btn btn-success">Save</button>
      </div>
  </form>
</div>
    
@endsection