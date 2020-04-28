@extends('layout')
@section('title', 'Urology')

@section('content')
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Urology</h2>
     <p><a href="{{ url('/') }}">Home</a> / Departments / <a href="{{ url('/departments/urology') }}">Urology</a></p>
  </div>

<div class="container">
	<div class="general_surgery col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>UROLOGY</h2>
        	<p>Urology is the branch of surgery that focuses on treatmment of urinary-tract and reproductive system.</p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/urology/urology-1.png') }}" class="img-responsive" />
      </div>
  </div>

	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>List of Diseases in Urology</h2>
        	 <p>1. Renal Stones <br>
				      2. BPH - Benign Prostatic Hyperplasia <br>
				      3. Male Infertility
           </p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/urology/urology-4.png') }}" class="img-responsive" />
      </div>
  </div>

	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>Benign prostatic hyperplasia</h2>
        	<p>Sri Gayatri Super Speciality medical oncology speciality team of doctors works towards preventing, diagnosing and treating cancer by offering the highest levels of treatment protocols and customised ulti-modality therapies.</p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/urology/urology-2.png') }}" class="img-responsive" />
      </div>
  </div>

	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>Renal Stones</h2>
        	<p>Treatment includes pain relievers and drinking lots of water to help pass the stone. Medical procedures may be required to remove or break up larger stones.</p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/urology/urology-3.png') }}" class="img-responsive" />
      </div>
  </div>
</div>

@endsection
