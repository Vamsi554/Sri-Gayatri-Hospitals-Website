@extends('layout')
@section('title', 'Gallery')

@section('content')
  <div class="clearfix"></div>
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  <h2>Gallery</h2>
      <p><a href="{{ url('/') }}">Home</a>  / <a href="{{ url('/gallery') }}">Gallery</a></p>
  </div>

  <div class="clearfix"></div>

  <div class="container">
    	<div class="news_events col-lg-12 col-md-12 col-sm-12 col-xs-12">

        @foreach ($galleries as $gallery)
          <div class="gallery_1 col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0s">
              <a class="lightbox thumbnail" href="{{ asset($gallery->file_path . $gallery->img_file_name_max) }}" data-littlelightbox-group="gallery" title="">
                  <img src="{{ asset($gallery->file_path . $gallery->img_file_name) }}" class="img-responsive" />
                  <div class="gallery-up">
                      <img src="{{ asset('images/custom/gallery-up.png') }}" />
                  </div>
              </a>
          </div>
        @endforeach

      </div>

      <div style="float:right;">
        {{ $galleries->links() }}
      </div>

  </div>


@endsection
