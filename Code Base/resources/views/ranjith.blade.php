@extends('layout')
@section('title', 'Dr.C.S.Ranjith')

@section('content')
  <div class="clearfix"></div>
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  <h2>About Doctor</h2>
      <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/doctors/profile/ranjith') }}">Dr.C.S.Ranjith</a></p>
  </div>

  <div class="container">
  <div class="about-us-empty col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
  <div class="about-us col-lg-11 col-md-11 col-sm-12 col-xs-12">

  	<div class="about-us-left col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
      	<img src="{{ asset('images/doctors/dr-ranjith.jpg') }}" class="img-responsive" />
    </div>

    <div class="about-us-right col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="about-us-right-top col-lg-8 col-md-8 col-sm-12 col-xs-12 wow fadeInUp">
            <h2><b>Dr.C.S.Ranjith</b><br>DM (Jipmer)</h2>
            <h3>Consultant Medical Oncologist & Haemotologist</h3>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="about-us-right-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="wow fadeInUp" data-wow-delay="0.5s"><b><i>DM (Oncology) : Jipmer Complete in 2016</i></b></p>
            <p class="wow fadeInUp" data-wow-delay="1s"><b><i>DNB (PAE Diatrics) : KKCTH Complete 2011</i></b></p>
            <p class="wow fadeInUp" data-wow-delay="1.5s"><b><i>MBBS - Srivenkateshwara Medical College (SVMC) Complete 2006</i></b></p>
        </div>
    </div>
  </div>
  </div>

  <div class="clearfix"></div>

  <div class="container">
  <div class="experience col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
  	  <h2>EXPERIENCES</h2>
      <div class="experience-1-in col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0s"></div>
      <div class="experience-1-in col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0s">
        <div class="experience-1">
        	<p>Worked in CMC<br /> Vellore in<br /> <span>Hemato Oncology<br />department in <b><br/>2007 - 2008</b><br /></span></p>
        </div>
      </div>
      <div class="experience-1-in col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
        <div class="experience-1">
        	<p>Worked in TATA<br />(TMC, Kolkata)<br /><span>in Haematology<b><br><br> in 2012</b></span><br /></p>
        </div>
      </div>
      <div class="experience-1-in col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0s"></div>
  </div>
  </div>

  <div class="professional col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
  <div class="container">
      <a href="{{ url('/contact') }}" style="border-radius:30px;background-color:#fd556d;">MAKE AN APPOINTMENT</a>
  </div>
  </div>

@endsection
