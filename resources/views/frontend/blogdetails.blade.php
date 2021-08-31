@extends('frontend.main_master')
@section('head')

    <title>GrowSup-{{ $singleblogs->title }}</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        /* card details start  */
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');

        section {
            padding: 100px 0;
        }

        .details-card {
            background: white;
        }

        .card-content {
            background: #ffffff;
            border: 4px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        }

        .card-img {
            position: relative;
            overflow: hidden;
            border-radius: 0;
            z-index: 1;
        }

        .card-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card-img span {
            position: absolute;
            top: 15%;
            left: 12%;
            background: #1ABC9C;
            padding: 6px;
            color: #fff;
            font-size: 12px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            transform: translate(-50%, -50%);
        }

        .card-img span h4 {
            font-size: 12px;
            margin: 0;
            padding: 10px 5px;
            line-height: 0;
        }

        .card-desc {
            padding: 1.25rem;
        }

        .card-desc h3 {
            color: #000000;
            font-weight: 600;
            font-size: 1.5em;
            line-height: 1.3em;
            margin-top: 0;
            margin-bottom: 5px;
            padding: 0;
        }

        .card-desc p {
            color: #747373;
            font-size: 14px;
            font-weight: 400;
            font-size: 1em;
            line-height: 1.5;
            margin: 0px;
            margin-bottom: 20px;
            padding: 0;
            font-family: 'Raleway', sans-serif;
        }

        .btn-card {
            background-color: #1ABC9C;
            color: #fff;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            padding: .84rem 2.14rem;
            font-size: .81rem;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            margin: 0;
            border: 0;
            -webkit-border-radius: .125rem;
            border-radius: .125rem;
            cursor: pointer;
            text-transform: uppercase;
            white-space: normal;
            word-wrap: break-word;
            color: #fff;
        }

        .btn-card:hover {
            background: orange;
        }

        a.btn-card {
            text-decoration: none;
            color: #fff;
        }

        /* End card section */


        .socialbox {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #37B0F1;
            text-align: center;
            border: 4px solid #ccc;
            box-shadow: 0 0 5px #000, inset 0 0 10px #fff;
            position: relative;
            z-index: 9;
            display: block;
            margin: 0 auto;
        }

        .socialbox h3 {
            line-height: 90px;
            margin: 0;
            padding: 0;
            color: #fff;
            text-transform: uppercase;
            position: relative;
            text-align: center;
            font-weight: bold;
        }

        .a {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #37B0F1;
            text-align: center;
            border: 4px solid #ccc;
            box-shadow: 0 0 5px #000, inset 0 0 10px #fff;
            float: left;
            line-height: 35px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: all 1s ease;
            opacity: 0;
        }

        .fa {
            color: #fff;
            text-shadow: 0 0 2px #000;
        }


        .a1.active {
            left: 150px;
            opacity: 1;
            background: #395693
        }

        .b1.active {
            left: 350px;
            opacity: 1;
            background: #0370AE
        }

        .c1.active {
            left: 250px;
            opacity: 1;
            background: #F20071
        }

        .d1.active {
            left: 450px;
            opacity: 1;
            background: #F4302F
        }

        .activemk {
            transition: 1s linear;
            background: #45DA05
        }




        .circle {
            margin: 0 auto;
            width: 100px;
            height: 100px;
            position: relative;
            text-align: center;
            border-radius: 50%;
            box-shadow: inset 0 0 20px #000
        }

        .circle::before {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 10px solid transparent;
            content: "";
            position: absolute;
            border-right-color: orange;
            border-bottom-color: #6cdbff;
            top: 0;
            left: 0;
            animation: moveon 2s infinite alternate
        }


        .circle::after {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 10px solid transparent;
            content: "";
            position: absolute;
            border-left-color: green;
            border-top-color: red;
            top: 0;
            left: 0;
            animation: moveon2 2s infinite alternate
        }

        @keyframes moveon {
            from {
                transform: rotate(360deg);
            }

            to {
                transform: rotate(0deg);
            }
        }

        @keyframes moveon2 {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(540deg);
            }
        }


        .circle .fa {
            font-size: 30px;
            color: blue;
            line-height: 100px;
        }





        .circle2 {
            margin: 0 auto;
            ;
            width: 100px;
            height: 100px;
            position: relative;
            text-align: center
        }

        .circle2::before {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 10px solid #ccc;
            content: "";
            position: absolute;
            border-left-color: red;
            border-top-color: red;
            top: 0;
            left: 0;
        }


        .circle2::after {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 10px solid #ccc;
            content: "";
            position: absolute;
            border-left-color: red;
            border-top-color: red;
            top: 0;
            left: 0;
            transition: all 200ms ease
        }

        .circle2:hover::after {
            transform: rotate(360deg);
            transition: all 300ms ease
        }

        .circle2 .fa {
            font-size: 30px;
            color: blue;
            line-height: 100px;
        }

        /* social */

        .social_case {
            width: 100px;
            height: 100px;
            background: #385596;
            transform: rotate(45deg);
            animation: my_anm1 1s linear infinite;
        }

        .social_lock {
            position: relative;
            width: 100px;
            height: 100px;
            margin-right: 50px;
            margin-top: 30px;
        }

        .vmk1 {
            font-size: 60px !important;
            color: #fff;
        }

        .social_lock:hover .vm {
            animation: moving 1s linear infinite alternate;
        }

        .mvm {
            animation: moving 1s linear infinite alternate;
        }

        @keyframes moving {
            from {
                transform: skew(15deg);
            }

            to {
                transform: skew(0deg)
            }
        }

        .social_case2 {
            width: 100px;
            height: 100px;
            background: #0070B0;
            transform: rotate(45deg);
        }

        .social_case2:hover {
            animation: my_anm2 1s linear infinite
        }

        .social_case3 {
            width: 100px;
            height: 100px;
            background: #5689C4;
            transform: rotate(45deg);
        }

        .social_case3:hover {
            animation: my_anm1 1s linear infinite
        }

        .social_case4 {
            width: 100px;
            height: 100px;
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%) !important;
            transform: rotate(45deg);
        }

        .social_case4:hover {
            animation: my_anm2 1s linear infinite
        }


        .mk {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes my_anm1 {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes my_anm2 {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(-360deg);
            }
        }

    </style>
@endsection
@section('content')

    <section class="sec-block">
        <div class="services-section" style="margin: 5%;">
            <div class="row">
                <div class="col-12">
                    <h2 class="float-left"></h2>

                </div>
            </div>
            <div class="container">
                <div class="main-banner-text title-hd max-width-80">
                    <h1>{{ $singleblogs->title }}<span></span></h1>
                </div>
                <!--main-banner-text end-->
                <div class="service-details pb-0">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="service-details-content">
                                <img src="{{ !empty($singleblogs->image) ? url('uploads/blog/' . $singleblogs->image) : url('uploads/noImageFound.png') }}"
                                    alt="" class="img-fluid">
                                    
                                <p style="max-width: 100%">{!! $singleblogs->description !!}</p>
                            </div>
                            <!--service-details-content end-->
                            <hr>
                            <h2>Share now</h2>

                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox"></div>

                            <hr>
                            <h2>Comments</h2>
                            <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>

                        </div>
                        <div class="col-lg-3">
                             <div class="sidebar">
                                        <div class="widget widget-categories">
                                            <ul>
                                                @foreach ($blogcategorys as $blogcategory)
                                                <li><a href="#" title="">{{$blogcategory->category_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="widget widget-help">
                                            <h3>How can we help you?</h3>
                                            <p>Don’t know where to start? We’ll help you.</p>
                                            <a href="#" title="" class="btn-default2">contact us</a>
                                        </div>
                                        
                                    </div> 
                        </div>
                    </div>
                </div>
                <!--service-details end-->
            </div>

        </div>
    </section>



    <section class="details-card">
        <div class="ml-5 mr-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="float-left">Recent Posts</h1>
                    <br>
                </div>
                @foreach ($recentblogs as $recentblog)
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <a href="{{ route('blog.details', $recentblog->slug) }}"><img
                                        src="{{ !empty($recentblog->image) ? url('uploads/blog/' . $recentblog->image) : url('uploads/noImageFound.png') }}"
                                        alt="{{ $recentblog->title }}"></a>
                            </div>
                            <div class="card-desc">
                                <a href="{{ route('blog.details', $recentblog->slug) }}">
                                    <h3>{!! Str::limit(strip_tags($recentblog->title), $limit = 45, $end = '...') !!}</h3>
                                </a>
                                <p>{!! Str::limit(strip_tags($recentblog->description), $limit = 100, $end = '...') !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <h2 style="text-align:center">Follow Us <span class="red" style="color:red"></h2>
            <hr>
            <div class="row" style="margin:0 auto; width:60%">


                <div class="social_lock">
                    <div class="social_case"></div>

                    <div class="mk"><i class="fa fa-facebook vmk1 mvm"></i></div>

                </div>


                <div class="social_lock">
                    <div class="social_case2"></div>
                    <div class="mk"><i class="fa fa-linkedin vmk1 vm"></i></div>

                </div>

                <div class="social_lock">
                    <div class="social_case3"></div>
                    <div class="mk"><i class="fa fa-twitter vmk1 vm"></i></div>

                </div>
                <div class="social_lock">
                    <div class="social_case4"></div>
                    <div class="mk"><i class="fa fa-instagram vmk1"></i></div>

                </div>


            </div>
        </div>
    </section>


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0"
        nonce="UeSuK9uP"></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-612dff9722d077a5"></script>

@endsection
