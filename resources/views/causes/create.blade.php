@extends('inc.main')

@section('header', 'Create cause')

@section('breadcrumb', 'Create')

@section('content')
<div class="content-wrapper">
    <form role="form" action="{{ route('cause.store')}}" method="POST">

        <div class="box-header with-border">
            <a href="{{ route('cause.index')}}" class="btn btn-primary pull-right">Back</a>
        </div>

        @csrf
      
        <div class="form-group">
            <label for="inputcause">cause Name</label>
            <input type="text" class="form-control" name="cause_name" id="inputcause" placeholder="Enter cause Name">
            </input>
        </div>
        <div class="form-group">
            <label for="inputcause">Cause Category</label>
            <select name="category_id" id="category" class="form-control">
        
            @foreach($categories as $cat)
            <option value="{{$cat->id}}" > {{$cat->category_name}}</option>
            @endforeach
        </select>
            <!-- <input type="text" class="form-control" name="category_id" id="inputcause" placeholder="Choose Category"> -->
            <!-- </input> -->
        </div>
        <div class="form-group">
            <label for="cause_description">Description</label>
            <textarea class="form-control" cols="40" rows="10" name="cause_description" id="cause_description">

        </textarea>
        </div>
        <div class="form-group">
            <label for="cause_image">Image</label>
            <input type="file" id="cause_image" name="cause_image">
        </div>
        <div class="form-group">
            <label for="cause_goal">Goal</label>
            <input type="text" class="form-control" name="cause_goal" id="cause_goal" placeholder="Enter Goal">
            </input>
        </div>
        <div class="form-group">
            <label for="cause_userId">User Id</label>
            <input type="text" class="form-control" name="cause_userId" id="cause_userId" placeholder="Enter userId">
            </input>
        </div>


        <div class="form-group">
            <label for="cause_address">Address</label>
            <input type="text" class="form-control" name="cause_address" id="cause_address" placeholder="Enter address">
            </input>
        </div>
        <div class="form-group">
            <label for="cause_completionDate">completion Date</label>
            <input type="text" class="form-control" name="cause_completionDate" id="cause_completionDate" placeholder="Enter date">
            </input>
        </div>



        <div class="form-group">
            <label for="cause">Status</label>
            <select class="form-control" name="cause_status">
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