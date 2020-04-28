@extends('layout')
@section('title', 'Surgical Oncology')

@section('content')
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Surgical Oncology</h2>
     <p><a href="{{ url('/') }}">Home</a> / Treatments / <a href="{{ url('/departments/surgicalOncology') }}">Surgical Oncology</a></p>
  </div>

<div class="container">
	<div class="general_surgery col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
	<div class="general_surgery_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0s">
    	<div class="general_surgery_in_left col-lg-9 col-md-9 col-sm-9 col-xs-12">
        	  <h2>SURGICAL ONCOLOGY</h2>
        	  <p>Surgical Oncology is the branch of surgery which focuses on the surgical management of tumors, (cancerous tumors)</p>
            <p>As one of the several modalities in the management of cancer, the specialty of surgical oncology is the best option for the cure.</p>
            <p>We Sri Gayatri Super Specialty Hospital is the Best Surgical Oncologist in Vijayawada and purely dedicated to treatment of all types of cancers,  especially in the Surgical, Medical and Palliative Management. We have successfully completed 300 plus cases with fruitful outcome.</p>
            <p>We're Proud to say that we've successfully treated most complicated cases in Surgical Oncology, to say few, in recent times in Andhra Pradesh, Vijayawada most difficult case 17 kgs tumor removed in our hospital.</p>
      </div>
    	<div class="general_surgery_in_right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<img src="{{ asset('images/departments/surgicalOncology/surgical-oncology-1.png') }}" class="img-responsive" />
      </div>
    </div>
</div>

<div class="container">
	<div class="general_surgery_news col-lg-12 col-md-12 col-sm-12 col-xs-12">

    	<div class="general_surgery_news_1 col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0s">
        	<a class="lightbox thumbnail" href="{{ asset('images/departments/surgicalOncology/surgical-oncology-news-3.jpg') }}" data-littlelightbox-group="gallery" title="">
          <img src="{{ asset('images/departments/surgicalOncology/surgical-oncology-news-3.jpg') }}" class="img-responsive" /></a>
      </div>

      <div class="general_surgery_news_1 col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
        	<a class="lightbox thumbnail" href="{{ asset('images/departments/surgicalOncology/surgical-oncology-news-2.jpg') }}" data-littlelightbox-group="gallery" title="">
          <img src="{{ asset('images/departments/surgicalOncology/surgical-oncology-news-2.jpg') }}" class="img-responsive" /></a>
      </div>

    	<div class="general_surgery_news_1 col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="1s">
        	<a class="lightbox thumbnail" href="{{ asset('images/departments/surgicalOncology/surgical-oncology-news-1.jpg') }}" data-littlelightbox-group="gallery" title="">
            <img src="{{ asset('images/departments/surgicalOncology/surgical-oncology-news-1.jpg') }}" class="img-responsive" /></a>
      </div>
	</div>
</div>

@endsection
