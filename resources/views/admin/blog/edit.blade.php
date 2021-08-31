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
                        <h1>Blogs</h1>
                    </div>

                </div>
            </div>
        </section>


        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <!-- /.card-header -->
                    <form method="POST" action="{{ route('blog.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$blog->id}}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blog Category</label>
                                        <select class="form-control select2" name="category_id" style="width: 100%;">
                                            @foreach ($blogcategorys as $blogcategory)
                                                <option value="{{$blogcategory->id}}" {{ $blogcategory->id == $blog->category_id ? 'selected' : '' }} >
                                                    {{ $blogcategory->category_name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Blog Image</label>
                                        <input type="file" class="form-control-file" id="imge" name="image">
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <img class="img-fluid" id="showImage" src="{{ !empty($blog->image) ? url('uploads/blog/' . $blog->image) : url('uploads/noImageFound.png') }}"
                                            alt="Blog picture" height="300" width="500">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <textarea id="summernote" name="description">{!! $blog->description !!} </textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                                
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
