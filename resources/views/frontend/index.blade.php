@extends('frontend.main_master')
@section('head')
<title>GrowSup</title>
<style>
    .card-main {
padding: 50px;
border-radius: 10px;
margin-top: 50px;
margin-bottom: 50px;
box-shadow: 0px 4px 8px 0px #283593
}

.card-0 {
color: #fff;
background-image: linear-gradient(180deg, rgb(176, 74, 216), rgb(111, 146, 243));
position: relative;
margin-left: 70px;
border-radius: 10px;
min-height: 312px
}

.carousel-indicators li {
cursor: pointer;
border-radius: 50% !important;
width: 10px;
height: 10px
}

.profile {
color: #000;
background-color: #FFD54F;
position: absolute;
left: -70px;
top: 17%;
border-radius: 8px;
border-top-left-radius: 0px;
border-bottom-right-radius: 0px
}

.profile-pic {
width: 120px;
height: 120px;
border-bottom-left-radius: 10px;
border-top-right-radius: 10px
}

.open-quotes {
margin-left: 130px;
margin-top: 100px
}

.content {
margin-left: 150px;
margin-right: 80px
}

.close-quotes {
margin-bottom: 100px;
margin-right: 60px
}

@media screen and (max-width: 600px) {
.card-main {
    padding: 50px 10px
}

.card-0 {
    min-height: 432px
}

.profile {
    top: 24%
}

.profile-pic {
    width: 90px;
    height: 90px
}

.open-quotes {
    margin-left: 100px
}

.content {
    margin-left: 120px;
    margin-right: 50px
}

.close-quotes {
    margin-right: 30px
}
}
</style>
@endsection
@section('content')




<div class="bg4">
    <section class="main-banner">
        <img class="mvn imgview" src="{{asset('frontend/images/resources/banner-img1.png')}}" alt=""
            style="padding: 120px; float: right;">
        <div class="banner-slider">
            <div class="banner-slide">
                <div class="container">
                    <div class="main-banner-text">

                        <h1 class="wow fadeInUp" data-wow-delay="450ms">Flourish Your Business With Our Support
                            <span></span>
                        </h1>
                        <span class="wow fadeInUp" data-wow-delay="300ms">Grow With us</span>
                        <p class="wow fadeInUp" data-wow-delay="600ms">An Internet Marketing Company providing
                            business consultancy, digital and social
                            media marketing and management support
                            to small and medium businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="sec-block3 pt-0 fadeInUp wow" data-wow-delay="250ms">
    <div class="services-section without-carousel">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="service-col">
                    <div class="svs-icon">
                        <img src="{{asset('frontend/images/icon5.svg')}}" alt="">
                    </div>
                    <h3 class="cmh">Digital Audit</h3>
                    <p class="servdet">Lorem Ipsum is simply dummy text of the prin Lorem Ipsum is simply dummy
                        text of the prinLorem Ipsum is simply dummy text of the prin</p>
                </div>
                <!--service-col end-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="service-col">
                    <div class="svs-icon">
                        <img src="{{asset('frontend/images/icon6.svg')}}" alt="">
                    </div>
                    <h3>Live Tracking</h3>
                    <p class="servdet">Lorem Ipsum is simply dummy text of the prin Lorem Ipsum is simply dummy
                        text of the prinLorem Ipsum is simply dummy text of the prin</p>
                </div>
                <!--service-col end-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="service-col">
                    <div class="svs-icon">
                        <img src="{{asset('frontend/images/icon7.svg')}}" alt="">
                    </div>
                    <h3>Reporting Matrix</h3>
                    <p class="servdet">Lorem Ipsum is simply dummy text of the prin Lorem Ipsum is simply dummy
                        text of the prinLorem Ipsum is simply dummy text of the prin</p>
                </div>
                <!--service-col end-->
            </div>
        </div>
    </div>
</section>

<section class=" sec-block fadeInUp wow">
    <div class="section_our_solution">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="our_solution_category">
                    <div class="solution_cards_box">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="solu_title">
                                <h3>Web & App Development</h3>
                            </div>
                            <div class="solu_description">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="our_solution_category">
                    <div class="solution_cards_box">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="solu_title">
                                <h3>Branding Soluons</h3>
                            </div>
                            <div class="solu_description">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="our_solution_category">
                    <div class="solution_cards_box">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="solu_title">
                                <h3>Digital Marketing</h3>
                            </div>
                            <div class="solu_description">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="our_solution_category">
                    <div class="solution_cards_box">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="solu_title">
                                <h3>Social Media and Management Services</h3>
                            </div>
                            <div class="solu_description">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="sec-block">
    <div class="fixed-bg bg4"></div>

    <div class="main-banner-text title-hd svs-header wow " data-wow-delay="500ms" style="text-align: center;">
        <h3>our services</h3>
        <h1>What Can We Do For You</h1>
    </div>

    <div class="services-section">


        <div class="section_our_solution">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/digital_marketing.png')}}" alt="Digital Marketing">
                                <div class="solu_title">
                                    <h3>Digital Marketing</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/content_marketin.png')}}" alt="Content Marketin">
                                <div class="solu_title">
                                    <h3>Content Marketin</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/app_development.png')}}" alt="App Development">
                                <div class="solu_title">
                                    <h3>App Development</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/web_development.png')}}" alt="Web Development">
                                <div class="solu_title">
                                    <h3>Web Development</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/seo.png')}}" alt="SEO">
                                <div class="solu_title">
                                    <h3>SEO</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/Community_management.png')}}"
                                    alt="Community Management">
                                <div class="solu_title">
                                    <h3>Community Management</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/outbound.png')}}" alt="Outbound Marketing">
                                <div class="solu_title">
                                    <h3>Outbound Marketing</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/branding.png')}}" alt="Branding Solutions">
                                <div class="solu_title">
                                    <h3>Branding Solutions</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our_solution_category">
                        <div class="solution_cards_box" style="padding: 20px;">
                            <div class="solution_card" style="text-align: center; ">
                                <div class="hover_color_bubble"></div>
                                <img class="servimg" src="{{asset('frontend/images/Social_Media_Marketing.png')}}"
                                    alt="Social Media Marketing">
                                <div class="solu_title">
                                    <h3>Social Media Marketing</h3>
                                </div>
                                <div class="solu_description">
                                    <button type="button" class="read_more_btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-7" style="padding-right: 3.5%;">
                    <br><br>
                    <div class="input-field m-0">
                        <button type="button" class="btn-default" id="submit">See more...</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--services-section end-->
</section>



<div class="bg6">
    <div class="row">
        <div class="col-lg-4">
            <div class="container tmcc" style="margin-left: 30%;margin-top: 30%;">
                <div class="tp-contact wow fadeInUp" data-wow-delay="300ms">
                    <div class="main-banner-text title-hd">
                        <h1>What Our Client Say About Us <span></span></h1>
                        <p class="bdy">We are grateful to know you are interested in our content and services.
                            Subscribe</p>
                    </div>
                    <!--title-hd end-->
                </div>
                <!--tp-contact end-->
            </div>
        </div>
        <div class="col-lg-8">
            <section class="sec-block">
                <div class="container-fluid px-2 px-md-4 py-5 mx-auto">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-9 col-xl-8">
                            <div class="card card-main border-0 text-center">
                                <h5 class="font-weight-bold mb-4"></h5>
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <div class="card border-0 card-0">
                                                <div class="card profile py-3 px-4">
                                                    <div class="text-center"> <img
                                                            src="https://i.imgur.com/gazoShk.jpg"
                                                            class="img-fluid profile-pic"> </div>
                                                    <h6 class="mb-0 mt-2">Marielle Haag</h6> <small>Backend
                                                        Developer</small>
                                                </div> <img class="img-fluid open-quotes"
                                                    src="https://i.imgur.com/Hp91vdT.png" width="20"
                                                    height="20">
                                                <p class="content mb-0">Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id
                                                    est laborum.</p> <img class="img-fluid close-quotes ml-auto"
                                                    src="https://i.imgur.com/iPcHyJK.png" width="20"
                                                    height="20">
                                            </div>
                                        </div>
                                        <div class="carousel-item active">
                                            <div class="card border-0 card-0">
                                                <div class="card profile py-3 px-4">
                                                    <div class="text-center"> <img
                                                            src="https://i.imgur.com/oW8Wpwi.jpg"
                                                            class="img-fluid profile-pic"> </div>
                                                    <h6 class="mb-0 mt-2">Ximena Vegara</h6> <small>UI/UX
                                                        Designer</small>
                                                </div> <img class="img-fluid open-quotes"
                                                    src="https://i.imgur.com/Hp91vdT.png" width="20"
                                                    height="20">
                                                <p class="content mb-0">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit, sed do eiusmod incididunt ut labore et
                                                    dolore magna aliqua.</p> <img
                                                    class="img-fluid close-quotes ml-auto"
                                                    src="https://i.imgur.com/iPcHyJK.png" width="20"
                                                    height="20">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card border-0 card-0">
                                                <div class="card profile py-3 px-4">
                                                    <div class="text-center"> <img
                                                            src="https://i.imgur.com/ndQx2Rg.jpg"
                                                            class="img-fluid profile-pic"> </div>
                                                    <h6 class="mb-0 mt-2">John Paul</h6> <small>UI/UX
                                                        Designer</small>
                                                </div> <img class="img-fluid open-quotes"
                                                    src="https://i.imgur.com/Hp91vdT.png" width="20"
                                                    height="20">
                                                <p class="content mb-0">Duis aute irure dolor in reprehenderit
                                                    in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur.</p> <img class="img-fluid close-quotes ml-auto"
                                                    src="https://i.imgur.com/iPcHyJK.png" width="20"
                                                    height="20">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card border-0 card-0">
                                                <div class="card profile py-3 px-4">
                                                    <div class="text-center"> <img
                                                            src="https://i.imgur.com/ndQx2Rg.jpg"
                                                            class="img-fluid profile-pic"> </div>
                                                    <h6 class="mb-0 mt-2">John Paul</h6> <small>UI/UX
                                                        Designer</small>
                                                </div> <img class="img-fluid open-quotes"
                                                    src="https://i.imgur.com/Hp91vdT.png" width="20"
                                                    height="20">
                                                <p class="content mb-0">Duis aute irure dolor in reprehenderit
                                                    in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur.</p> <img class="img-fluid close-quotes ml-auto"
                                                    src="https://i.imgur.com/iPcHyJK.png" width="20"
                                                    height="20">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--top-footer end-->



<section class="partners-section">
    <div class="">
        <div class="partners-logo">
            <div class="partner-col">
                <img src="{{asset('frontend/images/marketing_partner.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/social_media_ads.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/marketing_partner.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/shop_management.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/facebook_ads.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/product_photography.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/creative_content_design.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/facebook_ads.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/marketing_partner.png')}}" alt="">
            </div>
            <!--partner-col end-->
            <div class="partner-col">
                <img src="{{asset('frontend/images/social_media_ads.png')}}" alt="">
            </div>
            <!--partner-col end-->
        </div>
        <!--partners-logo end-->
    </div>
</section>
<!--partners-section end-->

<div class="container" style="max-width: 90%;">
    <section class="sec-block2">
        <div class="contact-us-page">
            <div class="row">

                <div class="col-lg-12">
                    <div class="contact-section-page">
                        <div class="main-banner-text title-hd wow fadeInUp" data-wow-delay="300ms">
                            <span>contact us</span>
                            <h1>Send a message <span></span></h1>
                            <p class="bdy">We are grateful to know you are interested in our content and
                                services. Subscribe!</p>
                        </div>
                        <!--title-hd end-->
                        <div class="contact-form wow fadeInUp" data-wow-delay="300ms">
                            <form method="post" action="{{route('message.store')}}" id="contact-form">
                                @csrf
                                <div class="response"></div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-field">
                                            <input type="text" name="name" class="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-field">
                                            <input type="text" name="email" class="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-field">
                                            <input type="number" name="phone" class="number"
                                                placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-field">
                                            <textarea name="message" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-field m-0">
                                            <button type="submit" class="btn-default" id="submit">Send
                                                message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--contact-form end-->
                    </div>
                    <!--consulation-section end-->
                </div>
            </div>
        </div>
        <!--contact-us-page end-->
    </section>
</div>

@endsection