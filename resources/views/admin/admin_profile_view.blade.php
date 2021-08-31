@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ !empty($adminData->profile_photo_path) ? url('uploads/profileimages/' . $adminData->profile_photo_path) : url('uploads/profileimages/noprofile.jpg') }}"
                                        alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{ $adminData->name }}</h3>

                                <p class="text-muted text-center">Super Admin</p>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#settings"
                                            data-toggle="tab">Profile</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#passwordchange" data-toggle="tab">Change Password</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="settings">
                                        <form class="form-horizontal" action="{{route('admin.profile.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $adminData->name }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ $adminData->email }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone"
                                                        value="{{ $adminData->phone }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Profile
                                                    Image</label>
                                                <div class=" col-sm-5">
                                                    <input  type="file" id="imge" class="custom-file-input" name="profile_photo_path">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                <div class=" col-sm-2">

                                                </div>
                                                <div class=" col-sm-3">
                                                    <img  class="profile-user-img img-fluid img-circle" id="showImage"
                                                        src="{{ !empty($adminData->profile_photo_path) ? url('uploads/profileimages/' . $adminData->profile_photo_path) : url('uploads/profileimages/noprofile.jpg') }}"
                                                        alt="User profile picture">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="passwordchange">
                                        <!-- The timeline -->
                                        <form class="form-horizontal" action="{{route('update.change.password')}}" method="POST">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Current Password</label>
                                                <div class="col-sm-10">
                                                    <input id="current_password" type="password" class="form-control" 
                                                        name="oldpassword" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10">
                                                    <input id="password" type="password" name="password" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Confirm
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                      </div>
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#imge').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
        });
    });

    </script>
@endsection
