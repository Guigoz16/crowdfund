@extends('inc\main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Causes</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Causes</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box-header">
      <a href="{{route('cause.create')}}" class="btn btn-primary">
        Add Cause
      </a>
    </div>


    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                SR.no
              </th>
              
              
              <th style="width: 20%">
                Cause Name
              </th>
              <th style="width: 20%">
                Category Id
              </th>
          
              <th style="width: 20%">
                Image
              </th>
              <th style="width: 20%">
                Description
              </th>
              <th style="width: 20%">
                Goal
              </th>
              <th style="width: 20%">
                Address
              </th>
              <th style="width: 20%">
                User Id
              </th>
              <th style="width: 20%">
                Copmletion Date
              </th>


              <th style="width: 20%">
                Created at
              </th>
              <th style="width: 20%" class="text-center">
                Status
              </th>
              <th style="width: 8%" class="text-center">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($causes as $cause)
            <tr role="row" class="odd">
              <td class="sorting_1">#{{$cause->id}}</td>
              
              <td>{{$cause->cause_name}}</td>
              
                
              <td>
                      @if($cause->category){{$cause->category->category_name}}
                    @else
                    category not found
                    @endif
              </td>
                
              
              <td>
                @if($cause->cause_image)
                <img src="{{asset('uploads/image/'.$cause->cause_image)}}" width="50px" height="50px">
                @else
                --
                @endif
              </td>
              <td>
                <p>
                  {{$cause->cause_description}}
                </p>
              </td>
              <td>{{$cause->cause_goal}}</td>
              <td>{{$cause->cause_address}}</td>
              <td>{{$cause->cause_userId}}</td>
              <td>{{$cause->cause_completionDate}}</td>



              <td>{{$cause->created_at}}</td>
              <td>
                @if($cause->status == true)
                <span class="label label-success">Active</span>
                @elseif($cause->status == false)
                <span class="label label-danger">Inactive</span>
                @endif
              </td>
            
              <td class="project-actions text-right">
                <a class="btn btn-info btn-sm" href="{{route('cause.edit', [$cause->id] )}}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
                </a>
                <form method="POST" accept-charset="UTF-8" style="display:inline">
                            @method('DELETE')
                            @csrf
                <a class="btn btn-danger btn-sm" href="{{route('cause.delete', [$cause->id])}}">
                  <i class="fas fa-trash">
                  </i>
                  Delete
                </a>
              </form>
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
< @endsection