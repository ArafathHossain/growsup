@extends('admin.admin_master')
@section('admin')

    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Blog Categories</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#categoryModal"> + Add
                      New</button>
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
                        <th>Category Name</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($Blogcategorys as $key=>$Blogcategory)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{$Blogcategory->category_name}}</td>
                            <td>
                              <a href="#" class="btn btn-info btn-sm edit" data-id="{{ $Blogcategory->id }}" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></a>
                              <a href="{{ route('category.delete', $Blogcategory->id) }}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                        @endforeach
                      
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Sirial No.</th>
                          <th>Category Name</th>
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

      {{-- category insert modal --}}
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form action="{{ route('category.store') }}" method="Post">
                  @csrf
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="category_name">Category Name</label>
                          <input type="text" class="form-control" id="category_name" name="category_name" required="">
                          <small id="emailHelp" class="form-text text-muted">This is your main category</small>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="Submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

  {{-- edit modal --}}
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form action="{{ route('category.update') }}" method="Post">
                  @csrf
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="category_name">Category Name</label>
                          <input type="text" class="form-control" id="e_category_name" name="category_name" required="">
                          <input type="hidden" class="form-control" id="e_category_id" name="id">
                          <small id="emailHelp" class="form-text text-muted">This is your main category</small>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="Submit" class="btn btn-primary">Update</button>
                  </div>
              </form>
          </div>
      </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script type="text/javascript">
        $('body').on('click', '.edit', function() {
            let cat_id = $(this).data('id');
            $.get("category/edit/" + cat_id, function(data) {
                $('#e_category_name').val(data.category_name);
                $('#e_category_id').val(data.id);
            });
        });

    </script>

    

@endsection
