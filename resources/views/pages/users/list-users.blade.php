@extends('default')
@section('title', 'Danh sách users')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh sách users</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách users</li>
              </ol>
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <a class="btn btn-success" href="user/add-user"><i class="fas fa-plus"></i> Add</a>
                      <div class="card-tools">
                        <form action="user/search" method="get">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="key" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Level</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $key => $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->level}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    {{ $data->links()}}
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
            <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection