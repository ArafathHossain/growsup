<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crope - Multipurpose agency website" />
    <meta name="author" content="George_fx">
    <meta name="keywords" content="" />
    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/color.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    {{-- {{asset('frontend/')}} --}}

    @yield('head')

</head>


<body>

    {{-- <div class="preloader">
        <div class="loader-content">
            <div class="logo">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="">
            </div>
            <h2>is loading...</h2>
        </div>
    </div> --}}
    <!--preloader end-->

    <div class="left-sidebar">
        <a href="#" title="" class="menu-btn">
            <div width="34" height="34" viewBox="0 0 34 34" fill="none">
                <img src="{{ asset('frontend/images/iconlogo.png') }}" alt="">
            </div>
        </a>
    </div>
    <!--left-sidebar end-->

    <div class="wrapper">

        @include('frontend.layout.header')

        @yield('content')

        @include('frontend.layout.footer')
    </div>
    <div class="clearfix"></div>


    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugin/slick.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/plugin/html5lightbox.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>


    <script>
        @if (Session::has('messege'))
            var type="{{ Session::get('alert-type', 'info') }}"
            switch(type){
            case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
            }
        @endif
    </script>


</body>

</html>
