@extends('layout')
@section('title', 'Best Cancer Hospital in Vijayawada')

@section('content')

  <!-- Images Carousel -->
  <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="slider">
        <ul>
        		<li><img src="{{ asset('images/banners/banner-1.jpg') }}"/></li>
        		<li><img src="{{ asset('images/banners/banner-2.jpg') }}"/></li>
        		<li><img src="{{ asset('images/banners/banner-3.jpg') }}"/></li>
        		<li><img src="{{ asset('images/banners/banner-4.jpg') }}"/></li>
        		<li><img src="{{ asset('images/banners/banner-5.jpg') }}"/></li>
            <li><img src="{{ asset('images/banners/banner-6.jpg') }}"/></li>
      	</ul>
  	</div>
  </div>
  <!-- Mobile Version Carousel -->
  <div class="mob-banner">
  	<div><img src="{{ asset('images/banners/mob-banner-1.jpg') }}"/></div>
  	<div><img src="{{ asset('images/banners/mob-banner-2.jpg') }}"/></div>
    <div><img src="{{ asset('images/banners/mob-banner-3.jpg') }}"/></div>
    <div><img src="{{ asset('images/banners/mob-banner-4.jpg') }}"/></div>
    <div><img src="{{ asset('images/banners/mob-banner-5.jpg') }}"/></div>
    <div><img src="{{ asset('images/banners/mob-banner-6.jpg') }}"/></div>
  </div>
  <!-- Hospital Description -->
  <div class="welcome col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
      <div class="welcome-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
      	<h1 class="wow fadeInUp" style="color:#00726b;"><b>Welcome to Sri Gayatri Super Speciality Hospital</b></h1>
        <p class="wow fadeInUp">Sri Gayatri Super Speciality Cancer Treatment Hospital in Vijayawada provides you with the best medical facilities offered today which primarily include Cancer Treatment such as Surgical Oncology, Medical Oncology, General Surgery, Urology and Nephrology.
        We are the Best Cancer Hospital in Vijayawada, Andhra Pradesh. <br><br> We offer care for patients with the availability of special day care units in the hospital.
        The diagnostic and centre at our hospital help us decide on the best treatment procedures.
        A well-equipped pharmacy lets patients anytime access to medicines.
        </p>
      </div>
      <div class="professional col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
        <div class="container">
            <a href="{{ url('/doctors/profile/murali') }}" style="border-radius:30px;background-color:#fd556d;">READ MORE</a>
        </div>
      </div>
    </div>
  </div>

  <div class="numbers col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
    <div class="container">
      <div class="numers-1 col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0s">
      	<img src="{{ asset('images/custom/beded-hospital.png') }}" />
      	<h2 class="count">50</h2>
        <p>Beded Hospital</p>
      </div>
      <div class="numers-1 col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.5s">
    	   <img src="{{ asset('images/custom/cured-patients.png') }}" />
    	   <h2 class="count">9500</h2>
         <p>Cured Patients</p>
      </div>
      <div class="numers-1 col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="1s">
    	   <img src="{{ asset('images/custom/quality-doctors.png') }}" />
    	   <h2 class="count">7</h2><h3>+</h3>
         <p>Quality Doctors</p>
      </div>
      <div class="numers-1 col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="1.5s">
    	   <img src="{{ asset('images/custom/years-experience.png') }}" />
    	   <h2 class="count">9</h2>
         <p>Years of experience</p>
      </div>

      <img src="{{ asset('images/custom/shadow.png') }}" class="img-responsive" />

      <div class="book-appointment-left col-lg-6 col-md-6 col-sm-6 col-xs-6 wow fadeInLeft">
      	<a href="{{ url('/contact') }}">Book An Appointment</a>
      </div>
      <div class="book-appointment-right col-lg-6 col-md-6 col-sm-6 col-xs-6 wow fadeInRight">
      	<a href="tel:0866-2434799">Call 0866-2434799</a>
      </div>
    </div>
  </div>

  <!-- Departments -->
  <div class="department col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
    <div class="container">
	     <h2 style="color:#00726b;">OUR DEPARTMENTS</h2>
        <div class="tab">
          	<button class="tablinks" onclick="openCity(event, 'Department-1')" id="defaultOpen">
              <img src="{{ asset('images/departments/minified/department-1.jpg') }}" class="img-responsive"/>
            </button>
            <button class="tablinks" onclick="openCity(event, 'Department-2')">
              <img src="{{ asset('images/departments/minified/department-2.jpg') }}"  class="img-responsive"/>
            </button>
            <button class="tablinks" onclick="openCity(event, 'Department-3')" >
              <img src="{{ asset('images/departments/minified/department-3.jpg') }}"  class="img-responsive"/>
            </button>
          	<button class="tablinks" onclick="openCity(event, 'Department-4')">
              <img src="{{ asset('images/departments/minified/department-5.jpg') }}"  class="img-responsive"/>
            </button>
          	<button class="tablinks" onclick="openCity(event, 'Department-5')">
              <img src="{{ asset('images/departments/minified/department-6.jpg') }}"  class="img-responsive"/>
            </button>
    	  </div>

        <div id="Department-1" class="tabcontent col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tabcontent-left col-lg-5 col-md-5 col-sm-12 col-xs-12">
          	<img src="{{ asset('images/departments/generalSurgery/department-1b.jpg') }}" class="img-responsive" />
          </div>
          <div class="tabcontent-right col-lg-7 col-md-7 col-sm-12 col-xs-12">
          	<h3 style="color:#fd556d;">General Surgery</h3>
            <p>This is a relatively new specialty dealing with minimal access techniques using cameras and small instruments inserted through 3 to 15mm incisions.
              Robotic surgery is now evolving from this concept (See Below). Gallbladders, appendices and colons can all be removed with this technique.
              Hernias are also able to be repaired laparoscopically. Bariatric surgery can be performed laparoscopically and there a benefits of doing so to reduce wound complications in obese patients. General surgeons that are trained today...</p>
            <a href="{{ url('/departments/generalSurgery') }}">READMORE</a>
          </div>
        </div>

        <div id="Department-2" class="tabcontent col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tabcontent-left col-lg-5 col-md-5 col-sm-12 col-xs-12">
          	<img src="{{ asset('images/departments/medicalOncology/department-2b.jpg') }}" class="img-responsive" />
          </div>
          <div class="tabcontent-right col-lg-7 col-md-7 col-sm-12 col-xs-12">
          	<h3 style="color:#fd556d;">Medical Oncology</h3>
            <p>Medical Oncology is a modality of treatment in cancer care which uses Chemotherapy, Immunotherapy, Hormonal Therapy and Targeted Therapy to treat cancer in an effective manner.
              Medical Oncology is regularly works in combination with Surgical Oncology or Radiation Oncology to give the best clinical results.</p>
            <a href="{{ url('/departments/medicalOncology') }}">READMORE</a>
          </div>
        </div>

        <div id="Department-3" class="tabcontent col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tabcontent-left col-lg-5 col-md-5 col-sm-12 col-xs-12">
          	<img src="{{ asset('images/departments/surgicalOncology/department-3b.jpg') }}" class="img-responsive" />
          </div>
          <div class="tabcontent-right col-lg-7 col-md-7 col-sm-12 col-xs-12">
          	<h3 style="color:#fd556d;">Surgical Oncology</h3>
            <p>Surgical Oncology (SO) is an internationally peer reviewed journal publishing original research both clinical and translational, comprehensive reviews, multimedia articles and meta-analyses that contribute to the advancement of knowledge in surgical oncology.
              Occasionally, SO publishes exceptional editorials and commentaries as they relate to selected papers. articles represent a spectrum of current technology in oncology evaluation/outcomes.</p>
            <a href="{{ url('/departments/surgicalOncology') }}">READMORE</a>
          </div>
        </div>

        <div id="Department-4" class="tabcontent col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tabcontent-left col-lg-5 col-md-5 col-sm-12 col-xs-12">
          	<img src="{{ asset('images/departments/nephrology/department-5b.jpg') }}" class="img-responsive" />
          </div>
          <div class="tabcontent-right col-lg-7 col-md-7 col-sm-12 col-xs-12">
          	<h3 style="color:#fd556d;">Nephrology</h3>
            <p>Nephrology is a specialty of medicine and pediatrics that concerns itself with the kidneys: the study of normal kidney function and kidney disease, the preservation of kidney health and the treatment.</p>
            <a href="{{ url('/departments/nephrology') }}">READMORE</a>
          </div>
        </div>

        <div id="Department-5" class="tabcontent col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tabcontent-left col-lg-5 col-md-5 col-sm-12 col-xs-12">
          	<img src="{{ asset('images/departments/urology/department-6b.jpg') }}" class="img-responsive" />
          </div>
          <div class="tabcontent-right col-lg-7 col-md-7 col-sm-12 col-xs-12">
          	<h3 style="color:#fd556d;">Urology</h3>
            <p>Urology, also known as genitourinary surgery, is the branch of medicine that focuses on surgical and medical diseases of the male and female urinary-tract system and the male reproductive organs.</p>
            <a href="{{ url('/departments/urology') }}">READMORE</a>
          </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="news-events col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
	<h2 style="color:#00726b;">NEWS AND MEDIA</h2>
    <div class="news-events-in col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="news-events-1 col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft">
        	<img src="{{ url('images/news_media/news-1.jpg') }}" class="img-responsive" />
          <h6><a href="{{ url('/news') }}"><img src="{{ url('images/custom/arrow.png') }}" /></a></h6>
        </div>

        <div class="news-events-1 col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
        	<img src="{{ url('images/news_media/news-2.jpg') }}" class="img-responsive" />
          <h6><a href="{{ url('/news') }}"><img src="{{ url('images/custom/arrow.png') }}" /></a></h6>
        </div>

        <div class="news-events-1 col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInRight">
        	<img src="{{ url('images/news_media/news-3.jpg') }}" class="img-responsive" />
          <h6><a href="{{ url('/news') }}"><img src="{{ url('images/custom/arrow.png') }}" /></a></h6>
        </div>
    </div>
  </div>
</div>


@endsection
