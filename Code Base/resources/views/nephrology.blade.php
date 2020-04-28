@extends('layout')
@section('title', 'Nephrology')

@section('content')
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Nephrology</h2>
     <p><a href="{{ url('/') }}">Home</a> / Departments / <a href="{{ url('/departments/nephrology') }}">Nephrology</a></p>
  </div>

<div class="container">
	<div class="general_surgery col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	<h2>NEPHROLOGY <br>(Medical Management of Kidney Related Diseases)</h2>
        	<p>Nephrology is a specialty of medicine and pediatrics that concerns itself with the kidneys: the study of normal kidney function and kidney disease, the preservation of kidney health, and the treatment.</p>
          <div class="general_surgery_bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul>
        		      <li class="wow fadeInUp" data-wow-delay="0s">Renal Failure</li>
				          <li class="wow fadeInUp" data-wow-delay="0s">Nephropathy</li>
				          <li class="wow fadeInUp" data-wow-delay="0s">Hematuria</li>
		          </ul>
		      </div>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/nephrology/nephrology-1.png') }}" class="img-responsive" />
        </div>
    </div>
</div>

@endsection
