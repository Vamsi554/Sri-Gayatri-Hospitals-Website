@extends('layout')
@section('title', 'General Surgery')

@section('content')
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	<h2>General Surgery</h2>
    <p><a href="{{ url('/') }}">Home</a> / Departments / <a href="{{ url('/departments/generalSurgery') }}">General Surgery</a></p>
  </div>

  <div class="container">
    	<div class="general_surgery col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="wow fadeInUp" data-wow-delay="0s">GENERAL SURGERY</h2>
          <p class="wow fadeInUp" data-wow-delay="0s">We at Sri Gayatri Super Speciality Hospital treat the all kinds of general surgeries, few are below.</p>
      </div>

	    <div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
      	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
          	<h2>Laproscopic Surgery</h2>
          	<p>This is relatively new specialty dealing with minimal access techniques using cameras and small instruments inserted through 3 to 15mm incisions. Robotic surgery is now evolving from this concept (see below). Gallbladders, appendices and colons can all be removed with this technique. Hernias are also able to be repaired laparoscopically. Bariatric surgery can be performed laparoscopically and there a benefits of doing so to reduce wound complications in obese patients. General surgeons that are trained today are expected to be proficient in laparoscopic procedures.</p>
        </div>
    	  <div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/generalSurgery/general-surgery-1.png') }}" class="img-responsive" />
        </div>
  </div>

	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>Colorectal Surgery</h2>
        	<p>General surgeons treat a wide variety of major and minor colon and rectal diseases including inflammatory bowel diseases (such as ulcerative colitis or Crohn's disease), diverticulitis, colon and rectal cancer, gastrointestinal bleeding and hemorrhoids.</p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/generalSurgery/general-surgery-2.png') }}" class="img-responsive" />
    </div>
  </div>


	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>Vascular Surgery</h2>
        	<p>General surgeons can perform vascular surgery if they receive special training and certification in vascular surgery. Otherwise, these procedures are performed by vascular surgery specialists. However, general surgeons are capable of treating minor vascular disorders.</p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/generalSurgery/general-surgery-4.png') }}" class="img-responsive" />
      </div>
  </div>

	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>Endocrine Surgery</h2>
        	<p>General surgeons are trained to remove all or part of the thyroid and parathyroid glands in the neck and the adrenal glands just above each kidney in the abdomen. In many communities, they are the only surgeon trained to do this. In communities that have a number of subspecialists, other subspecialty surgeons may assume responsibility for these procedures.</p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/generalSurgery/general-surgery-5.png') }}" class="img-responsive" />
      </div>
  </div>

	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>Head & Neck surgery</h2>
        	<p>Swellings confined to head & neck region like perotid swellings, thyroid swellings, lymphnodal swellings and other neck swellings can be cured by doing surgery.</p>
			    <p>We proud to say that we are good at doing difficult and complicated head and neck surgeries</p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/generalSurgery/general-surgery-7.png') }}" class="img-responsive" />
      </div>
  </div>
</div>

@endsection
