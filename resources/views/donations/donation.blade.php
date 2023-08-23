@extends('inc.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Donations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Donations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                          Full Name
                      </th>
                      <th style="width: 20%">
                           Email
                      </th>
                      <th style="width: 20%">
                           Cause ID
                      </th>
                      <th style="width: 20%">
                            Amount
                      </th>
                      <th style="width: 20%">
                          Created at
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($donation  as $d)
                  <tr role="row" class="odd">
                    <td class="sorting_1">#{{$d->id}}</td>
                    <td>{{$d->donate_name}}</td>
                    <td>{{$d->donate_email}}</td>
                    <td>{{$d->cause_id}}</td>
                    <td>{{$d->donate_amount}}</td>
                    <td>{{$d->created_at}}</td>
                
                 </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
      <!-- /.card -->

 @endsection