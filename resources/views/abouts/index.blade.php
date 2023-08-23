@extends('inc.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
   
    @if(session()->has('success'))
        <div class="alert alert-success">
          {{@session()->get('success')}}
        </div>
    @endif

    <!-- Main content -->
    <section class="content">
        
        <div class="box-header">
            <a href="{{route('about.create')}}" class="btn btn-primary">
                Add about
            </a>
        </div>
        

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects table-bordered">
              <thead class="thead-dark">
                  <tr>
                      <th style="width: 1%">
                          SR.no
                      </th>
                      <th style="width: 20%">
                          Name
                      </th>
                      <th style="width: 20%">
                        Image
                      </th>
                      <th style="width: 20%">
                        Position
                      </th>
                     

                      <th style="width: 8%" class="text-center">
                         Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($abouts  as $about)
                  <tr role="row" class="odd">
                    <td class="sorting_1">#{{$about->id}}</td>
                    <td>{{$about->name}}</td>
                    <td>
                        @if($about->image)
                        <img src="{{ asset('/uploads/image/'.$about->image) }}" width="50px" height="50px">
                        @endif
                    </td> 
                    <td>{{$about->position}}</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{route('about.edit',[$about->id] )}}" >
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                      
                        <form method="POST" accept-charset="UTF-8" style="display:inline">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-danger btn-sm" href="{{route('about.delete', [$about->id])}}" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)">
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
@endsection