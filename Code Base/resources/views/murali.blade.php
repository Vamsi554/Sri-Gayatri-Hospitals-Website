@extends('layout')
@section('title', 'Dr.Chatarajupalli Muralikrishna')

@section('content')
  <div class="clearfix"></div>
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  <h2>About Doctor</h2>
      <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/doctots/profile/murali') }}">Dr.Chatarajupalli Muralikrishna</a></p>
  </div>

  <div class="container">
  <div class="about-us-empty col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
  <div class="about-us col-lg-11 col-md-11 col-sm-12 col-xs-12">

  	<div class="about-us-left col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
      	<img src="{{ asset('images/doctors/dr-chatarajupalli-murali-krishna.jpg') }}" class="img-responsive" />
    </div>

    <div class="about-us-right col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="about-us-right-top col-lg-8 col-md-8 col-sm-12 col-xs-12 wow fadeInUp">
            <h2><b>Dr.Chatarajupalli Muralikrishna</b><br>MS, MCH (BHU), FMAS</h2>
            <h3>Surgical Oncologist & Advanced Laproscopic Surgeon</h3>
        </div>
        <div class="about-us-right-top col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
        	<img src="{{ asset('images/awards/vaidya-ratna.png') }}" class="img-responsive" />
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="about-us-right-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="wow fadeInUp" data-wow-delay="0.5s"><b><i>FMAS - Fellowship in Minimal Access Surgery (Laproscopic Surgeries in 2014)</i></b></p>
            <p class="wow fadeInUp" data-wow-delay="1s"><b><i>MCH - Surgical Oncology from Banaras Hindu University, Varanasi in 2014</i></b></p>
            <p class="wow fadeInUp" data-wow-delay="1.5s"><b><i>MS from Andhra Medical College, Vishakapatanam in 2008</i></b></p>
            <p class="wow fadeInUp" data-wow-delay="2s"><b><i>Completed MBBS from Siddhartha Medical College Vijayawada in 2003</i></b></p>
        </div>
    </div>
  </div>
  </div>

  <div class="clearfix"></div>

  <div class="container">
  <div class="experience col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
  	  <h2>EXPERIENCES</h2>
      <div class="experience-1-in col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0s">
        <div class="experience-1">
        	<p>Worked in Surgical<br> Gastroenterology Department in <br><span>SEVENHILLS HOSPITAL<br>under Dr BB Das<br>  MCh (AIIMS)<br/>VISHAKAPATNAM IN <b>2008</b><br></span></p>
        </div>
      </div>
      <div class="experience-1-in col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
        <div class="experience-1">
        	<p>Worked in Surgical<br> Gastroenterology Department in<br><span>INDUS HOSPITAL Under Dr Sridhar MCh (GB.Pant) VISHAKAPATNAM<b><br>2008 - 2010</b></span><br></p>
        </div>
      </div>
      <div class="experience-1-in col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1s">
        <div class="experience-1">
        	<p>Worked as a consultant<br> surgical oncologist in<br>  <span>Nagarguna and<br>Anu Hospit<br>(Vijayawada)<br> during<br><b>2014 - 2018</b></span><br></p>
        </div>
      </div>
      <div class="experience-1-in col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1.5s">
        <div class="experience-1">
        	<p>Started<br> <span>Sri Gayatri<br> Super Speciality<br> Hospital<br>(Cancer Speciality)<br>(Vijayawada)<br><b>2017</b></span><br></p>
        </div>
      </div>
  </div>
  </div>

  <div class="clearfix"></div>

  <div class="professional col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
  <div class="container">
  	  <h2 style="color:#d81f4f;">PROFESSIONAL EXPERIENCES</h2>
      <p>300 Cases especially Highly Challenging and Difficult Surgeries in Surgical Oncology especially in Gastroenterlogy, Gynaecology, Head and Neck fields. He has very good skills in doing all types of Laproscopic Surgeries</p>
      <a href="{{ url('/contact') }}" style="border-radius:30px;background-color:#fd556d;">MAKE AN APPOINTMENT</a>
  </div>
  </div>

@endsection
