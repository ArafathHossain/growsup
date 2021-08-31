<header class="pb">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{URL::to('/')}}" title="">
                    <img src="{{asset('frontend/images/logo.png')}}" alt="">
                </a>
            </div><!--logo end-->
            <nav>
                <ul>
                    <li><a href="{{route('services')}}" title="">Services</a></li>
                    <li><a href="{{route('portfolio')}}" title="">Our Work</a></li>
                    <li><a href="{{route('blogs')}}" title="">Blog</a></li>
                </ul>
            </nav><!--navigation end-->
            <div class="right-side-hd">
                <span>+1 845 631 78 49</span>
                @auth
                <a href="{{URL::to('user/profile')}}" title="" class="btn-default">Profile</a>
                <a href="{{route('dashboard')}}" title="" class="btn-default">Dashboard</a>
                <a href="{{route('user.logout')}}" title="" class="btn-default">Logout</a>
                
                @else
                <a href="{{ route('login') }}" title="" class="btn-default" >Login/Sign up</a>
                @endauth
                
            </div>
            <a href="index.html" title="" class="menu-btn">
                <img src="{{asset('frontend/images/iconlogo.png')}}" alt="">
            </a>
            <div class="clearfix"></div>
        </div><!--header-content end-->
    </div>	
</header><!--header end-->

<div class="responsive-mobile-menu" style="opacity: 0.7;">
    <div class="responsive-logo">
        <img src="{{asset('frontend/images/logo.png')}}" alt="">
    </div>
    <ul>
        <li><a href="{{route('about')}}" title="">About</a></li>
        <li><a href="career.html" title="">Career</a></li>
        <li><a href="{{route('contact')}}" title="">Contact</a></li>
    </ul>
    <ul>
        <li><h2 style="margin-top: 300px;">Be always in touch</h2></li>
        <li>
            <div class="input-field">
                <form method="post" action="{{route('newsletter')}}">
                    @csrf
                <input type="text" name="email" class="email" placeholder="Email" style="width: 80%;" required>
                <button type="submit" style="border-radius: 50%; background-color: purple; height: 40px; width: 40px;"><img src="{{asset('frontend/images/send.svg')}}" alt=""></button>
            </form>
            </div>
        </li>
    </ul>
</div>