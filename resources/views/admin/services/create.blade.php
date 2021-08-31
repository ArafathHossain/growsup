@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Service</h1>
                    </div>

                </div>
            </div>
        </section>


        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <!-- /.card-header -->
                    <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="service_title" placeholder="Enter Title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="service_price" placeholder="Enter Price">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Short Description</label>
                                        <textarea class="form-control" rows="3" name="service_short_description"></textarea>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Service Icon</label>
                                        <input type="file" class="form-control-file" id="imge" name="service_icon">
                                    </div>
                                </div>

                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <img class="img-fluid" id="showImage" src="{{ url('uploads/noImageFound.png') }}"
                                            alt="Blog picture" height="100" width="130">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card-body">
                                        <label>Long Description</label>
                                        <textarea id="summernote" name="service_long_description"> </textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#imge').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 5,
            height: 500
        });
    </script>


@endsection
