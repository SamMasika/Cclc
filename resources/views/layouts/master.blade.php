<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from tfhtml.themepul.com/restly/index3-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Feb 2023 12:00:21 GMT -->
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Cummulative Consultancy (T) Limited.</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('master/assets/images/logos/cclc.png')}}" type="image/x-icon">
    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&amp;family=Oswald:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('master/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{asset('master/assets/css/font-awesome-5.9.0.css')}}">
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="{{asset('master/assets/css/bootstrap.min.css')}}">
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="{{asset('master/assets/css/magnific-popup.css')}}">
    <!--====== Falticon ======-->
    <link rel="stylesheet" href="{{asset('master/assets/css/flaticon.css')}}">
    <!--====== Animate ======-->
    <link rel="stylesheet" href="{{asset('master/assets/css/animate.css')}}">
    <!--====== Slick ======-->
    <link rel="stylesheet" href="{{asset('master/assets/css/slick.css')}}">
    <!--====== Main Style ======-->
    <link rel="stylesheet" href="{{asset('master/assets/css/style.css')}}">

</head>

<body style="background-color: blue">
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="theme-loader"></div>
        </div>

        <!-- main header -->
        <header class="main-header header-three text-white">

            <div class="header-top-wrap bg-blue py-10">
                <div class="container">
                    <div class="header-top">
                        <div class="top-left">
                            <ul>
                                <li>Call Us: <a href="callto:548978478">+255-735433954, +255-756433954</a></li>
                                <li>Email us: <a href="mailto:demo@example.com">amillinga@ccltz.co.tz</a></li>
                            </ul>
                        </div>
                        <div class="top-right">
                            {{-- <div class="office-time">
                                <i class="far fa-clock"></i><span>08:00 am - 06:00 pm</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">

                    <div class="header-inner d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('master/assets/images/logos/cclc.png')}}" alt="Logo" width="35%" title="Logo"></a>
                            </div>
                        </div>

                        <div class="nav-outer clearfix d-flex align-items-center">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo py-15">
                                        <a href="index.html">
                                            <img src="{{asset('master/assets/images/logos/logo.png')}}" alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation onepage clearfix">
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#services">services</a></li>
                                        <li><a href="#about">about</a></li>
                                        <li><a href="#team">team</a></li>
                                    </ul>
                                    @if(auth()->check())
                                    <li><a href="{{url('dashboard')}}" style="color: white;">Dashboard</a></li>
                                    <li><a href="{{url('logout')}}" style="color: white;"  onclick="event.preventDefault(); 
                                        document.getElementById('logout-form').submit();" >Logout</a></li>
                                        @else
                                            <li><a href="{{url('login')}}" style="color: white;" >Login</a></li>
                                        @endif
                                </div>
                              
                                <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Menu Button -->
                            {{-- <div class="menu-btn">
                                <a href="contact.html" class="theme-btn">meet with us</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>


        <!-- Hero Section Start -->
        <section class="hero-section-two bgs-cover overlay pt-40 rpt-80" id="home" style="background-image: url(master/assets/images/hero/consult.jpg); ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-sm-11">
                        <div class="hero-content text-white py-220 rpy-120">
                            <span class="sub-title d-block wow fadeInUp delay-0-2s">Building Africa’s Future with ICT.</span>
                            <h1 class="wow fadeInUp delay-0-4s mt-20">CUMMULATIVE CONSULTANCY (T) LIMITED.</h1>
                            <div class="hero-btns mt-35 wow fadeInUp delay-0-6s">
                                {{-- <a href="contact.html" class="theme-btn mr-25">meet with us</a> --}}
                                {{-- <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <section class="about-three py-120 rpy-100" id="about"  style="background-color ">
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <div class="section-title text-center mb-35">
                            {{-- <span class="sub-title">WHO WE ARE</span> --}}
                            <h2  class="text-primary">About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                        
                    <div class="feature-item wow fadeInUp delay-0-2s">
                        <div class="feature-content">
                            {{-- <h5  class="text-primary">Our Mission</h5> --}}
                            <p>  <strong>
                             
                                Welcome to CUMMULATIVE CONSULTANCY (T) LIMITED, a leading IT consultancy firm that
                                provides innovative technology solutions to businesses of all sizes. With a team of highly skilled
                                and experienced consultants, we have a proven track record of delivering results that drive
                                growth, efficiency, and customer satisfaction.
                              
                            </strong>
                                </p>
                            {{-- <a href="service-details.html" class="learn-more">Read More <i class="fas fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                   
                
                
            </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-three-image rmb-60 mr-10 rmr-0 wow fadeInLeft delay-0-2s">
                            <img src="{{asset('master/assets/images/about/about-three-1.jpg')}}" alt="About">
                            <img src="{{asset('master/assets/images/about/about-three-2.jpg')}}" alt="About">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                            <div class="feature-item wow fadeInUp delay-0-2s">
                                <div class="feature-content">
                                    <h5  class="text-primary">Our Mission</h5>
                                    <p>  To empower businesses with innovative technology solutions and exceptional service, enabling
                                        them to achieve their goals and succeed in an ever-evolving digital landscape.
                                        </p>
                                    {{-- <a href="service-details.html" class="learn-more">Read More <i class="fas fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                            <div class="feature-item wow fadeInUp delay-0-2s">
                                <div class="feature-content">
                                    <h5  class="text-primary">Our Vision</h5>
                                    <p >    To be the leading provider of technology services, recognized for our expertise, integrity, and
                                        commitment to delivering exceptional outcomes for our clients.
                                        </p>
                                    {{-- <a href="service-details.html" class="learn-more">Read More <i class="fas fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Start -->
        <section class="services-four pt-115 rpt-95 pb-210 rpb-150" id="services"  style="background-image: url(master/assets/images/team/bgccl.jpg);">
            <div class="container">
                <div class="row justify-content-center " >
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <div class="section-title text-center mb-35">
                            {{-- <span class="sub-title">WHO WE ARE</span> --}}
                            <h2 class="text-light">Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" >
                    @foreach ($service as $serve)
                        
                    <div class="col-xl-4 col-md-6 py-15">
                        <div class="feature-item wow fadeInUp delay-0-2s ">
                            <div class="icon">
                                <i class="flaticon flaticon-art"></i>
                            </div>
                            <div class="feature-content">
                                <h5>{{$serve->name}}</h5>
                                <p> {{$serve->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                   
                </div>
                <div class="feature-btn text-center mt-20">
                    {{-- <a href="services.html" class="theme-btn">view all services</a> --}}
                </div>
            </div>
        </section>
       


        <!-- Team Section Start -->
        <section class="team-section-two bgs-cover text-white pt-115 rpt-95 pb-90 rpb-70" id="team"  style="background-image: url(master/assets/images/team/bgccl.jpg); no repeat">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <div class="section-title text-center mb-35">
                            {{-- <span class="sub-title">WHO WE ARE</span> --}}
                            <h2 class="text-light">Our Team</h2>
                        </div>
                    </div>
                </div>

                
                <div class="row justify-content-center logo-carousel-wrap">
                    @foreach ($team as $item)
                    <div class="logo-item">
                   
                        <div class="team-member style-two wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('adm/assets/images/team/' . $item->image) }}" alt="Team Member">
                            </div>
                            <div class="member-designation">
                                <h5><a href="#team">{{$item->name}}</a></h5>
                                <span>{{$item->title}}</span>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contact Area Start -->
        <section class="contact-two" id="contact">
            <div class="container">
                <div class="contact-section-inner p-50 br-5 bg-blue">
                    <div class="row">
                        {{-- <div class="col-lg-7">
                            <div class="contact-section-form rmb-50 wow fadeInLeft delay-0-2s">
                                <div class="section-title mb-20">
                                    <h2>Get In Touch</h2>
                                </div>
                                <form id="contact-form" class="contact-form" name="contact-form" action="#" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">Your name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Your email address</label>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="number">Your phone number</label>
                                                <input type="text" id="number" name="number" class="form-control" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="service">Service Required</label>
                                                <select id="service" name="service">
                                                    <option value="default" selected>Service</option>
                                                    <option value="about">About</option>
                                                    <option value="contact">Contact</option>
                                                    <option value="team">Team</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea name="comments" id="comments" class="form-control" rows="4" placeholder="Let us know what you need." required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="theme-btn">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="col-lg-12">
                            <div class="contact-image-number style-two bgs-cover overlay wow fadeInRight delay-0-2s" style="background-image: url(master/assets/images/hero/consult.jpg);">
                                <div class="contact-informations text-white">
                                    <h3>Contact Us</h3>
                                    <ul class="contact-info">
                                        <li>
                                            <i class="fas fa-phone-alt"></i>
                                            <div class="content">
                                                <span>Call Us</span>
                                                <h5><a href="callto:+255-0767297831">+255-735433954, +255-756433954</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <div class="content">
                                                <span>Write to Us</span>
                                                <h5><a href="mailto:amillinga@ccltz.co.tz">amillinga@ccltz.co.tz</a></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->


        <!-- Footer Area Start -->
        <footer class="main-footer footer-two bgs-cover text-white pt-150 rpt-115" style="background-image: url(master/assets/images/footer/footer-bg-map.png);">
            <div class="container">
                <div class="logo-carousel-wrap style-two bg-white py-130 px-25 br-5">
                    @foreach ($partner as $item)
                    <div class="logo-item">
                        <a href="#"><img src="{{asset('adm/assets/images/partner/'.$item->logo)}}" alt="Client Logo"></a>
                    </div>
                    @endforeach
                   
                </div>
                <div class="footer-widget-area pt-85 pb-30">
                    <div class="row">
                       
                        <div class="col-lg-4 col-6">
                            <div class="footer-widget link-widget ml-20 rml-0">
                                <h4 class="footer-title">Page Links</h4>
                                <ul class="list-style-two">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="footer-widget link-widget ml-20 rml-0">
                                <h4 class="footer-title">Our Services</h4>
                                <ul class="list-style-two">
                                    @foreach ($service as $serve)
                                    <li><a href="#">{{$serve->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo ">
                                    <a href="#"><img src="{{asset('master/assets/images/logos/cclc.png')}}" alt="Logo" width="40%"></a>
                                </div>
                               
                                <ul class="contact-info mt-15">
                                    <li><i class="fas fa-map-marker-alt"></i>
                                      <p>
                                        P.O.BOX 67597 ,Dar es Salaam-Tanzania <br>
                                        Phone: <span> +255-735433954,<br> +255-756433954.</span> <br>
                                       Email: amillinga@ccltz.co.tz</p>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copyright-inner pt-15">
                        <div class="social-style-one mb-5 float-start">
                            
                        </div>
                        <p> Copyright <script>document.write(new Date().getFullYear())</script> CCL. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

    </div>
    <!--End pagewrapper-->

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>

    @if(session('status'))
    <script>
   swal("{{session('status')}}");
    </script>

    @endif

    <!--====== Jquery ======-->
    <script src="{{asset('master/assets/js/jquery-3.6.0.min.js')}}"></script>
    <!--====== Bootstrap ======-->
    <script src="{{asset('master/assets/js/bootstrap.min.js')}}"></script>
    <!--====== Appear Js ======-->
    <script src="{{asset('master/assets/js/appear.min.js')}}"></script>
    <!--====== Slick ======-->
    <script src="{{asset('master/assets/js/slick.min.js')}}"></script>
    <!--====== Magnific Popup ======-->
    <script src="{{asset('master/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--====== Isotope ======-->
    <script src="{{asset('master/assets/js/isotope.pkgd.min.js')}}"></script>
    <!--  WOW Animation -->
    <script src="{{asset('master/assets/js/wow.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('master/assets/js/script.js')}}"></script>

</body>


<!-- Mirrored from tfhtml.themepul.com/restly/index3-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Feb 2023 12:01:01 GMT -->
</html>