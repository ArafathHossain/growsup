<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('backend/dist/img/iconlogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GrowSup</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ !empty($adminData->profile_photo_path) ? url('uploads/profileimages/' . $adminData->profile_photo_path) : url('uploads/profileimages/noprofile.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.profile') }}" class="d-block">name</a> 
                 {{-- {{$adminData->name}} --}}
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                {{-- Bolog --}}
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blogs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blog.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blog.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- End Bolog --}}

                {{-- Services --}}
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-rocket"></i>
                        <p>
                            Services
                            <i class="right fas fa-angle-left"></i> 
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('service.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('service.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Services List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- End Services --}}
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Users & Messages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.list')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User lists</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('message.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Messages</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('newsletter.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Newsletters</p>
                            </a>
                        </li>
                    </ul>
                </li>





                <li class="nav-header">Action</li>
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">LogOut</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
