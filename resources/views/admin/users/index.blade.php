@extends('admin.admin_master')
@section('admin')

    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Users List</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Users</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
    
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Sirial No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $key=>$user)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">View</a>
                            </td>
                          </tr>
                        @endforeach
                      
                      </tbody>
                      <tfoot>
                        <tr>
                            <th>Sirial No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>

    

@endsection
