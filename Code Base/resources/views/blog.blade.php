@extends('layout')
@section('title', 'Blog')

@section('content')
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Sri Gayatri Blog</h2>
     <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/blog') }}">Blog</a></p>
  </div>

<div class="container">
	<div class="skmshb col-lg-12 col-md-12 col-sm-12 col-xs-12">
    		<div class="skmshbs col-lg-9 col-md-9 col-sm-8 col-xs-12">
        		<div class="skmshimg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <img src="{{ asset('images/blog/follow-up.jpg') }}" class="img-responsive" alt="Follow Up" />
            </div>
            <div class="skmshinfo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h2 style="color:#fd556d;">Follow-Up Care for Cancer Treatment</h2>
                <p> When a person suffers from cancer the most common treatment is to remove the tumour as well as the surrounding tissue. This treatment is one of the oldest treatments and is believed to be the most effective ones among other forms of cancer treatment.
                  However, once this surgery has been done the patients need to follow post-operative care as prescribed by the doctor.</p>
                <a href="{{ url('/blog/cancerTreatment/followUp') }}">Read More</a>
            </div>
        </div>

        <div class="skmshbsl col-lg-3 col-md-3 col-sm-4 col-xs-12">
        		<h2>Recent Blog</h2>
        		<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <li><a href="{{ url('/blog/cancerTreatment/followUp') }}">Follow-Up Care for Cancer Treatment</a></li>
                <li><a href="{{ url('/blog/cancerTreatment/types') }}">Types of Cancer Treatments</a></li>
            </ul>
        </div>

        <div class="skmshbs col-lg-9 col-md-9 col-sm-8 col-xs-12">
        		<div class="skmshimg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <img src="{{ asset('images/blog/types-of-cancer-treatments.jpg') }}" class="img-responsive" alt="Types Of Cancer Treatments" />
            </div>
            <div class="skmshinfo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h2 style="color:#fd556d;">Types of Cancer Treatments</h2>
                <p>Various types of cancer treatments are available in the medical science; however, the choice of type of treatment to be performed on a cancer patient depends upon the type of cancer he</p>
                <a href="{{ url('/blog/cancerTreatment/types') }}">Read More</a>
            </div>
        </div>
    </div>
</div>

@endsection
