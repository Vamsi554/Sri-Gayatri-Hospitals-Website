@extends('layout')
@section('title', 'Home')

@section('content')
  <div class="clearfix"></div>
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Awards</h2>
     <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/srigayatri/awards') }}">Awards</a></p>
  </div>

  <div class="container">
  	<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
      	<div class="gallery_1 col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
          	<a class="lightbox thumbnail" href="{{ asset('images/awards/news-events-11b.jpg') }}" data-littlelightbox-group="gallery" title="">
              <img src="{{ asset('images/awards/news-events-11.jpg') }}" class="img-responsive" />
              	<div class="gallery-up">
                  	<img src="{{ asset('images/custom/gallery-up.png') }}" />
                </div>
            </a>
        </div>

      	<div class="gallery_1 col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
          	<a class="lightbox thumbnail" href="{{ asset('images/awards/news-events-23b.jpg') }}" data-littlelightbox-group="gallery" title="">
              <img src="{{ asset('images/awards/news-events-23.jpg') }}" class="img-responsive" />
              	<div class="gallery-up">
                  	<img src="{{ asset('images/custom/gallery-up.png') }}" />
                </div>
            </a>
        </div>

      	<div class="gallery_1 col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
          	<iframe width="100%" height="280" src="https://www.youtube.com/embed/OgVjlV9FgkE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
  	</div>
  </div>

@endsection
