@extends('inc.main')

@section('header', 'Edit about')

@section('breadcrumb', 'Edit')

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
    <form role="form" action="{{ route('about.update', [$about->id])}}" method="POST">
        
        <div class="box-header with-border">
            <a href="{{ route('about.index')}}" class="btn btn-primary pull-right">Back</a>
        </div>
        <input type="hidden" id="id" name="id" value="{{$about->id}}">
       
        @csrf
       
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name"  id="name" value="{{$about->name}}">
            </input>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file"  name="image" id="image">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" name="position" id="position" value="{{$about->position}}">
            </input>
        </div>
        <div class="form-group">
            <label for="twitter" class="form-label">twitter URL</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="twitter" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="form-group">
            <label for="facebook" class="form-label">facebook URL</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="facebook" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="form-group">
            <label for="linkedin" class="form-label">linkedin URL</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="linkedin" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="form-group">
            <label for="instagram" class="form-label">instagram URL</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="instagram" aria-describedby="basic-addon3">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

@endsection