@extends('frontend.main_master')
@section('head')
<title>GrowSup-Contact</title>
@endsection
@section('content')

    <section class="sec-block" style="margin-top: 8%;">
        <div class="fixed-bg bg4"></div>

        <div class="services-section" style="background-size: 1920px 1524px;">

            <section class="sec-block2">
                <div class="contact-us-page">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact-list">
                                <div class="contact-lzt">
                                    <div class="contact-icon">
                                        <img src="images/c-icon1.svg" alt="">
                                    </div>
                                    <div class="contact-nfo">
                                        <h3>Address:</h3>
                                        <p>27 Division St, New York, NY 10002, USA</p>
                                    </div>
                                </div>
                                <!--contact-lzt end-->
                                <div class="contact-lzt">
                                    <div class="contact-icon">
                                        <img src="images/c-icon2.svg" alt="">
                                    </div>
                                    <div class="contact-nfo">
                                        <h3>Hit us up:</h3>
                                        <span>+1 845 631 78 49</span>
                                        <span>info@sitename.com</span>
                                    </div>
                                </div>
                                <!--contact-lzt end-->
                                <div class="contact-lzt">
                                    <div class="contact-icon">
                                        <img src="images/c-icon3.svg" alt="">
                                    </div>
                                    <div class="contact-nfo">
                                        <h3>Working Schedule:</h3>
                                        <p>Mon - Fri: 9 am - 6 pm Sat, Sun: Holiday</p>
                                    </div>
                                </div>
                                <!--contact-lzt end-->
                            </div>
                            <!--contact-list end-->
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-section-page">
                                <div class="main-banner-text title-hd wow fadeInUp" data-wow-delay="300ms">
                                    <span>contact us</span>
                                    <h1>Send a message <span></span></h1>
                                    <p class="bdy">We always try to implement our creative ideas at the highest level. Tell
                                        us about your project and we will make it work. </p>
                                </div>
                                <!--title-hd end-->
                                <div class="contact-form wow fadeInUp" data-wow-delay="300ms">
                                    <form method="post" action="{{ route('message.store') }}" id="contact-form">
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
                                                    <input type="text" name="email" class="email" placeholder="Email"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="input-field">
                                                    <input type="number" name="phone" class="number" placeholder="Phone"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-field">
                                                    <textarea name="message" placeholder="Message" required></textarea>
                                                </div>
                                                <!--input-field end-->
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
            <div><br><br></div>

            <section class="map-section">
                <iframe
                    src="https://maps.google.com/maps?hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(Crope)&amp;ie=UTF8&amp;t=p&amp;z=7&amp;iwloc=B&amp;output=embed"></iframe>
            </section>
        </div>
    </section>

@endsection
