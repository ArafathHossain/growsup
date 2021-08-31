<footer>
    <div class="container" style="max-width: 90%;">
        <div class="bottom-footer">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget widget-about wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{asset('frontend/images/logo.png')}}" alt="" height="70px">
                        <p>Copyright © 2021 GrowSup</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="widget widget-para wow fadeInDown" data-wow-delay="600ms">
                        <h3 class="widget-title">Useful Links:</h3>
                        <p>Services</p>
                        <p>Our Work</p>
                        <p>Blog</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget widget-para wow fadeInUp" data-wow-delay="900ms">
                        <h3 class="widget-title">Address:</h3>
                        <p>200/00 Pallabi, Dhaka-1206, Bangladesh</p>
                        <p>+88 01700 000000</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="widget widget-para wow fadeInDown" data-wow-delay="1200ms">
                        <h3 class="widget-title">News Letter:</h3>
                        <p style="line-height: 150%; font-size: 13px;">We are greatful to know you are
                            interested in
                            our content and services. Subscribe</p>
                        <div class="input-field">
                            <form method="post" action="{{route('newsletter')}}">
                                @csrf
                                <input type="text" name="email" class="email" placeholder="Email"
                                    style="width: 80%;" required>
                                <button type="submit"
                                    style="border-radius: 50%; background-color: purple; height: 50px; width: 50px;"><img src="{{asset('frontend/images/send.svg')}}" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>