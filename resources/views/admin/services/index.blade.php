@extends('admin.admin_master')
@section('admin')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a class="btn btn-primary" href="{{route('service.create')}}">+ Add New</a>
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
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Services as $key => $Service)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $Service->service_title }}</td>
                                                <td>{{ $Service->service_short_description }}</td>
                                                <td>{{ $Service->service_price }}</td>
                                                <td>{{ $Service->service_status }}</td>
                                                <td>
                                                    <a href="{{ route('service.edit', $Service->id) }}"
                                                        class="btn btn-info btn-sm edit"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('service.delete', $Service->id) }}"
                                                        class="btn btn-danger btn-sm" id="delete"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sirial No.</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Status</th>
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
