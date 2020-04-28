@extends('layout')
@section('title', 'Medical Oncology')

@section('content')
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Medical Oncology</h2>
     <p><a href="{{ url('/') }}">Home</a> / Treatments / <a href="{{ url('/departments/medicalOncology') }}">Medical Oncology</p>
  </div>

  <div class="container">
	   <div class="general_surgery col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
	   <div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	  <div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
          	<h2>MEDICAL ONCOLOGY</h2>
          	<p>Medical Oncology is a modality of treatment in cancer care which uses Chemotherapy, Immunotherapy, Hormonal Therapy and Targeted Therapy to treat cancer in an effective manner. Medical Oncology regularly works in combination with Surgical Oncology or Radiation Oncology to give the best clinical results.</p>
            <p>In Sri Gayatri Super Speciality Hospital is the Best Medical Oncologist in Vijayawada and the Medical Oncology team works towards preventing, diagnosing and treating the cancer by offering the highest levels of treatment protocols and customized multi-modality therapies.</p>
        </div>
      	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
          	<img src="{{ asset('images/departments/medicalOncology/medical-oncology-1.png') }}" class="img-responsive" />
        </div>
    </div>
</div>

<div class="container">
	<div class="general_surgery_news col-lg-12 col-md-12 col-sm-12 col-xs-12">

    	<div class="general_surgery_news_1 col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0s">
        	<a class="lightbox thumbnail" href="{{ asset('images/departments/medicalOncology/medical-oncology-news-1.jpg') }}" data-littlelightbox-group="gallery" title="">
          <img src="{{ asset('images/departments/medicalOncology/medical-oncology-news-1.jpg') }}" class="img-responsive" /></a>
      </div>

    	<div class="general_surgery_news_1 col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
        	<a class="lightbox thumbnail" href="{{ asset('images/departments/medicalOncology/medical-oncology-news-2.jpg') }}" data-littlelightbox-group="gallery" title="">
          <img src="{{ asset('images/departments/medicalOncology/medical-oncology-news-2.jpg') }}" class="img-responsive" /></a>
      </div>

    	<div class="general_surgery_news_1 col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="1s">
        	<a class="lightbox thumbnail" href="{{ asset('images/departments/medicalOncology/medical-oncology-news-3.jpg') }}" data-littlelightbox-group="gallery" title="">
          <img src="{{ asset('images/departments/medicalOncology/medical-oncology-news-3.jpg') }}" class="img-responsive" /></a>
      </div>
	</div>
</div>

@endsection
