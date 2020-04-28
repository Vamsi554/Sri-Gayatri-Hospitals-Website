<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Title -->
    <title>@yield('title') | {{ config('app.name') }}</title>
    <!-- Define the meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sri Gayatri Hospital is one of the best cancer hospitals in Vijayawada with the latest technology to treat cancer. Visit Today!" />
    <meta name="keywords" content="Best Cancer Hospital in Vijayawada, Cancer Hospital in Vijayawada, Cancer Treatment in Vijayawada, Cancer Doctor in Vijayawada, Oncologist in Vijayawada" />
    <!-- External Links -->
    <link rel="canonical" href="https://www.srigayatrihospital.com/" />
    <link rel="icon" type="image/png" href="{{ asset('images/logos/sri_gayatri.ico') }}" />
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animation.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
    <link href="{{ asset('css/bootstrap-dropdownhover.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gayatri-stylesheet.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive-stylesheet-gayatri.css') }}" />
    <!-- Script -->
    <script type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "WebSite",
              "name": "Sri Gayatri Hospital",
              "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.srigayatrihospital.com/?s={search_term}",
                "query-input": "required name=search_term"
            },
            "url": "https://www.srigayatrihospital.com/"
            }
    </script>
    <script type="application/ld+json">
            {
              "@context" : "http://schema.org",
              "@type" : "Organization",
              "name" : "Sri Gayatri Hospital",
              "url" : "https://www.srigayatrihospital.com/",
              "sameAs" :["https://www.facebook.com/Sri-Gayatri-Super-Speciality-Hospital-1960681740891523/","https://twitter.com/","https://plus.google.com/","https://www.linkedin.com/","https://in.pinterest.com/"]
            }
    </script>
</head>
<body>
    <div class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <div class="header-left col-lg-2 col-md-2 col-sm-12 col-xs-12">
       <div class="logo" align="center">
          <a href="{{ url('/') }}"><img src="{{ asset('images/logos/gayatri-hospital-logo.png') }}" class="img-responsive"></a>
          <br/>
       </div>
        <div class="mob-logo col-lg-10 col-md-10 col-sm-7 col-xs-7">
           <a href="{{ url('/') }}"><img src="{{ asset('images/logos/mobile-logo.jpg') }}" class="img-responsive"></a>
        </div>
        <div class="mob-menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="bar" onclick="myFunction(this)">
              <p>Menu</p>
              <div class="bars">
                 <div class="bar1"></div>
                 <div class="bar2"></div>
                 <div class="bar3"></div>
              </div>
           </div>
           <div class="menu-link col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <ul>
                 <li><a href="{{ url('/') }}">Home</a></li>
                 <li>
                    <a href="javascript:void()">About Doctor</a>
                    <ul class="mob-dropdown">
                       <li><a href="{{ url('/doctors/profile/murali') }}">Dr. Ch Murali Krishna</a></li>
                       <li><a href="{{ url('/doctors/profile/ranjith') }}">Dr. C.S. Ranjith</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="javascript:void()">Our Departments</a>
                    <ul class="mob-dropdown">
                       <li><a href="{{ url('/departments/surgicalOncology') }}">Surgical Oncology</a></li>
                       <li><a href="{{ url('/departments/medicalOncology') }}">Medical Oncology</a></li>
                       <li><a href="{{ url('/departments/generalSurgery') }}">General surgery</a></li>
                       <li><a href="{{ url('/departments/nephrology') }}">Nephrology</a></li>
                       <li><a href="{{ url('/departments/urology') }}">Urology</a></li>
                    </ul>
                 </li>
                 <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                 <li><a href="{{ url('/news') }}">New & Events</a></li>
                 <li><a href="{{ url('/caseStudy') }}">Case Studies</a></li>
                 <li><a href="{{ url('/blog') }}">Blog</a></li>
                 <li><a href="{{ url('/feedback') }}">Feedback</a></li>
              </ul>
           </div>
        </div>
     </div>

     <div class="header-right col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <div class="header-right-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <a href="https://goo.gl/maps/Q6UJ4azawfpYcxZ3A" target="_blank" style="text-decoration:none;">
             <i class="fa fa-map-marker" style="color:#00726b;font-size:1.3em;"></i>
             <span style="padding-right:30px;color:#333;">  Vijayawada, Andhra Pradesh 520002</span>
           </a>
           <a href="mailto:sgshvja@gmail.com" style="text-decoration:none;">
             <i class="fa fa-envelope" style="color:#00726b;font-size:1.3em;"></i>
             <span style="padding-right:30px;color:#333;">  sgshvja@gmail.com</span>
           </a>
           <i class="fa fa-phone" style="color:#00726b;font-size:1.3em;"></i>
           <span class="text-secondary" style="padding-right: 30px;">  CALL US NOW!  0866-2434799</span>
           <!-- Social Media Links -->
           <a href="https://www.facebook.com/Sri-Gayatri-Super-Speciality-Hospital-1960681740891523/" target="_blank" style="text-decoration:none;" onmouseover="document.getElementById('fbIcon').style.color='#3b5998';" onmouseout="document.getElementById('fbIcon').style.color='#C0C0C0';">
             <i id="fbIcon" class="fa fa-facebook" style="color:#C0C0C0;font-size:1.5em;padding-right:10px;"></i>
           </a>
           <a href="https://www.youtube.com/watch?v=Dm07JTMl6WY" style="text-decoration:none;" target="_blank" onmouseover="document.getElementById('ytIcon').style.color='#c4302b';" onmouseout="document.getElementById('ytIcon').style.color='#C0C0C0';">
             <i id="ytIcon" class="fa fa-youtube" style="color:#C0C0C0;font-size:1.5em;padding-right:10px;"></i>
           </a>
           <a href="{{ url('/blog') }}" style="text-decoration:none;" onmouseover="document.getElementById('bgIcon').style.color='#00acee';" onmouseout="document.getElementById('bgIcon').style.color='#C0C0C0';">
             <i id="bgIcon" class="fa fa-podcast" style="color:#C0C0C0;font-size:1.5em;padding-right:10px;"></i>
           </a>
           <a href="{{ url('/contact') }}" style="text-decoration:none;" onmouseover="document.getElementById('apIcon').style.color='#fd556d';" onmouseout="document.getElementById('apIcon').style.color='#C0C0C0';">
             <i id="apIcon" class="fa fa-book" style="color:#C0C0C0;font-size:1.5em;padding-right:10px;"></i>
           </a>
           <br><br>
        </div>
        <div class="header-right-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="follow-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-hover="dropdown"><a href="{{ url('/') }}" style="background:none;">HOME</a>
                </button>
             </div>
              <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown"><a href="javascript:void()">ABOUT DOCTORS</a></span>
                 </button>
                 <ul class="dropdown-menu">
                    <li><a href="{{ url('/doctors/profile/murali') }}">Dr.Ch Murali Krishna</a></li>
                    <li><a href="{{ url('/doctors/profile/ranjith') }}">Dr.C.S.Ranjith</a></li>
                 </ul>
              </div>
              <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown"><a href="javascript:void()">OUR DEPARTMENTS</a></span>
                 </button>
                 <ul class="dropdown-menu">
                   <li><a href="{{ url('/departments/surgicalOncology') }}">Surgical Oncology</a></li>
                   <li><a href="{{ url('/departments/medicalOncology') }}">Medical Oncology</a></li>
                   <li><a href="{{ url('/departments/generalSurgery') }}">General surgery</a></li>
                   <li><a href="{{ url('/departments/nephrology') }}">Nephrology</a></li>
                   <li><a href="{{ url('/departments/urology') }}">Urology</a></li>
                 </ul>
              </div>
              <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" data-hover="dropdown"><a href="{{ url('/gallery') }}" style="background:none;">GALLERY</a>
                 </button>
              </div>
              <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" data-hover="dropdown"><a href="{{ url('/news') }}" style="background:none;">NEWS & EVENTS</a>
                 </button>
              </div>
              <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" data-hover="dropdown"><a href="{{ url('/caseStudy') }}" style="background:none;">CASE STUDIES</a>
                 </button>
              </div>
              <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" data-hover="dropdown"><a href="{{ url('/blog') }}" style="background:none;">BLOG</a>
                 </button>
              </div>
              <div class="dropdown">
                 <button class="btn btn-default dropdown-toggle" type="button" data-hover="dropdown"><a href="{{ url('/feedback') }}" style="background:none;"><b>FEEDBACK</b></a>
                 </button>
              </div>
           </div>
        </div>
     </div>
    </div>

    <!-- Custom Layouts -->
    @yield('content')

    <!-- End of Custom Layouts -->
    <div class="container">
      	<div class="general_surgery_last col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
          	<ul>
              <li>Top Doctors<br /><span>(Well experienced doctor)</span></li>
              <li>24 hours Service<br /><span>Call us anytime book appointment</span></li>
              <li>24 hours emergengy<br /><span>Call us anytime book appointment</span></li>
              </ul>
        </div>
    </div>
    <div class="footer col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
     <div class="footer-empty col-lg-1 col-md-1 col-sm-12 col-xs-12">
     </div>
     <div class="footer-address col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft">
        <img src="{{ asset('images/logos/footer-logo.png') }}" class="img-responsive" />
        <p># 30-13/1-23, Atchamamba Street, <br />
           Kothavanthana Road, Durga Agraharam, <br />
           Vijayawada, Andhra Pradesh 520002
        </p>
        <p>Call : 9550833552, 0866 6631199, 0866 2434799</p>
        <a href="{{ url('/contact') }}"><i class="fa fa-calendar"></i> GET AN APPOINTMENT</a>
     </div>
     <div class="footer-menu col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="footer-menu-1 col-lg-4 col-md-4 col-sm-6 col-xs-6 wow zoomIn" data-wow-delay="0s">
           <h2>Quick Links</h2>
           <ul>
              <li class="active"><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/doctors/profile/murali') }}">About Doctor</a></li>
              <li><a href="{{ url('/awards') }}">Awards</a></li>
              <li><a href="{{ url('/news') }}">News & Media</a></li>
              <li><a href="{{ url('/gallery') }}">Gallery</a></li>
              <li><a href="{{ url('/contact') }}">Contact us</a></li>
           </ul>
        </div>
        <div class="footer-menu-1 col-lg-4 col-md-4 col-sm-6 col-xs-6 wow zoomIn" data-wow-delay="0.5s">
           <h2>Departments</h2>
           <ul>
             <li><a href="{{ url('/departments/surgicalOncology') }}">Surgical Oncology</a></li>
             <li><a href="{{ url('/departments/medicalOncology') }}">Medical Oncology</a></li>
             <li><a href="{{ url('/departments/generalSurgery') }}">General surgery</a></li>
             <li><a href="{{ url('/departments/nephrology') }}">Nephrology</a></li>
             <li><a href="{{ url('/departments/urology') }}">Urology</a></li>
           </ul>
        </div>
        <div class="footer-menu-1 col-lg-4 col-md-4 col-sm-12 col-xs-12 wow zoomIn" data-wow-delay="1s">
           <h2>Timings</h2>
           <ul>
              <li>Monday - Friday :</li>
              <li>8.00 AM - 6.00 PM</li>
              <li>Saturday - Sunday :</li>
              <li>10.00 AM - 7.00 PM</li>
           </ul>
        </div>
        <div class="clearfix"></div>
        <div class="footer-copyrights col-lg-12 col-md-12 col-sm-12 col-xs-12 wow zoomIn" data-wow-delay="1s">
           <div class="footer-copyrights col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <p class="wow fadeInRight">
                 &copy;
                 <script language="javascript" type="text/javascript">
                    var today = new Date()
                    var year = today.getFullYear()
                    document.write(year)
                 </script> Sri Gayatri Super Speciality Hospital  |  All Rights Reserved.
                 <br> Website By Vamsi Krishna Bulusu.
              </p>
           </div>
        </div>
        <div class="footer-empty col-lg-1 col-md-1 col-sm-12 col-xs-12">
        </div>
     </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/vmc.slide.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vmc.slide.effects.js') }}"></script>
    <script>
    $('#slider').vmcSlide({
            duration: 2000,
            speed: 1800
            , effects: ['blindsX']
            , showText: true
            , random: false
            , flip: function (from, to) {
            }
        });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/arrow.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script>
       new WOW().init();
    </script>
    <script>
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 7000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    </script>
    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
    </script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-dropdownhover.js') }}"></script>
    <script>
    $('.testimonial').slick({
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 1000,
      centerPadding: '0px',
      slidesToShow: 1,
    });
    </script>
    <script>
    $('.mob-banner').slick({
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 1000,
      centerPadding: '0px',
      slidesToShow: 1,
      dots: true
    });
    </script>
    <script>
    $(document).ready(function(){
    	$('.menu-link').hide();
    		$('.bar').click(function(){
            $('.menu-link').slideToggle(400);
        	});
    });
    </script>
    <script>
    	function myFunction(x) {
        	x.classList.toggle("change");
    	}
    </script>
</body>
</html>
