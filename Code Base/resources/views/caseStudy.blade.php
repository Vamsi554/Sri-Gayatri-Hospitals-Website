@extends('layout')
@section('title', 'Case Study')

@section('content')

  <div class="clearfix"></div>

  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  <h2>Case Studies</h2>
      <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/caseStudy') }}">Case Studies</a></p>
  </div>

  <div class="container">
    @foreach ($caseStudies as $caseStudy)
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 vid-one serv-hed">
				<h4>{{ $caseStudy->additional_details }}</h4>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 vid-one">
  				<video class="v-one" width="500" height="279" controls>
  					  <source src="{{ asset($caseStudy->file_path . $caseStudy->file_name) }}" type="video/mp4">
  					  <source src="{{ asset($caseStudy->file_path . $caseStudy->file_name) }}" type="video/ogg">
  					  Your browser does not support the video tag.
  				</video>
        </div>
    </div>
   @endforeach
  </div>

  <br><br>

@endsection
