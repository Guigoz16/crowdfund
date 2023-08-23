@extends('inc.main')

@section('header', 'Edit cause')

@section('breadcrumb', 'Edit')

@section('content')
<div class="content-wrapper">
    <form role="form" action="{{ route('cause.update', [$cause->id])}}" method="POST">

        <div class="box-header with-border">
            <a href="{{ route('cause.index')}}" class="btn btn-primary pull-right">Back</a>
        </div>
        <input type="hidden" id="cause_id" name="cause_id" value="{{$cause->id}}">

        @csrf
        <div class="form-group">
            <label for="inputcause">Category</label>
            <select name="cause_id" id="cause_id" value="{{$cause->id}}">
                <option value="food"> Food </option>
                <option value="memorial">Memorial</option>
                <option value="education">Education</option>
                <option value="treatment">Treatment</option>
            </select>
            <!-- <input type="text" class="form-control" name="cause_id" id="inputcause" placeholder="Choose cause"> -->
            <!-- </input> -->
        </div>
        <div class="form-group">
            <label for="inputcause">cause Name</label>
            <input type="text" class="form-control" name="cause_name" id="cause_name" value="{{$cause->cause_name}}">
            </input>
        </div>
        <div class="form-group">
            <label for="cause_description">Description</label>
            <textarea class="form-control" cols="40" rows="10" name="cause_description" id="cause_description" value="{{$cause->cause_description}}">

        </textarea>
        </div>
        <div class="form-group">
            <label for="cause_image">Image</label>
            <input type="file" name="cause_image" id="cause_image" value="{{$cause->cause_image}}">
        </div>
        <div class="form-group">
            <label for="cause_goal">Goal</label>
            <input type="text" class="form-control" name="cause_goal" id="cause_goal" value="{{$cause->cause_goal}}">
            </input>
        </div>
        <div class="form-group">
            <label for="cause_userId">User Id</label>
            <input type="text" class="form-control" name="cause_userId" id="cause_userId" value="{{$cause->cause_userId}}">
            </input>
        </div>


        <div class="form-group">
            <label for="cause_address">Address</label>
            <input type="text" class="form-control" name="cause_address" id="cause_address" value="{{$cause->cause_address}}">
            </input>
        </div>
        <div class="form-group">
            <label for="cause_completionDate">completion Date</label>
            <input type="text" class="form-control" name="cause_completionDate" id="cause_completionDate" value="{{$cause->cause_completionDate}}">
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
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

@endsection