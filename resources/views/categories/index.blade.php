@extends('inc.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       
      <a href="{{ route('category.archive')}}">View archived posts</a>
        
        <div class="box-header">
            <a href="{{route('category.create')}}" class="btn btn-primary">
                Add Category
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
                          Category Name
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
                  @foreach($categories  as $category)
                  <tr role="row" class="odd">
                    <td class="sorting_1">#{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td class="project-state">
                        @if($category->status == true)
                             <span class="label label-success">On</span>
                         @elseif($category->status == false)
                             <span class="label label-danger">Off</span>
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{route('category.edit',[$category->id] )}}" >
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        @if ($category->trashed())
                        <form method="POST" accept-charset="UTF-8" style="display:inline">
                            
                            {{ csrf_field() }}
                          <a class="btn btn-danger btn-sm" href="{{route('category.restore', $category->id)}}" title="Delete Category">
                              <i class="fas fa-trash">
                              </i>
                              Restore
                          </a>
                        </form>
                        <form method="POST" accept-charset="UTF-8" style="display:inline">
                            @csrf
                            <a class="btn btn-danger btn-sm" href="{{route('category.force_delete', $category->id)}}" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                <i class="fas fa-trash">
                                </i>>
                                Delete Forever
                            </a>
                        </form>
                        @else
                        <form method="POST" accept-charset="UTF-8" style="display:inline">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-danger btn-sm" href="{{route('category.delete', [$category->id])}}" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                <i class="fas fa-trash">
                                </i>
                                Delete 
                            </a>
                        </form>
                        @endif
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

@push('extra_script')

<script type="text/javascript">
    @if (count($errors) > 0)
       $('#category-add').modal('show');
    @endif 
</script>
{{-- 
<script>
    function editCategory(id){
        var category_id = id;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url: '{{ route("category.update",[$category->id] )}}',
            data:{
                id:category_id
            },
            success:function(data) {
                $("#category_id").val(data.id);
                $("#category_edit").val(data.category_name);
                $("#status").val(data.status);
                $("#category_edit").modal('show');
            }
        });
    }
</script> --}}
@endpush