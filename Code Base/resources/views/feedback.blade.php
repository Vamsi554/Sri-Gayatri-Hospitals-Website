@extends('layout')
@section('title', 'Feedback')

@section('content')

  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Feedback</h2>
     <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/srigayatri/feedback') }}">Feedback</a></p>
  </div>
  <div class="clearfix"></div>
  <div class="container">
  <div class="contact-us col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="contact-left-empty col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
  <div class="contact-left col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
    @if(Session::has('success'))
      <div class="alert alert-success" style="display: inline-block;">
         {{ Session::get('success') }}
            @php
             Session::forget('success');
            @endphp
       </div>
    @endif
      <h2>Provide Us With Your Valuable Feedback</h2>

      <form enctype="multipart/form-data" name="enquiry" action="{{ url('/feedback/save') }}" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <ul class="enquiryForm">
              <!-- Name -->
              <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <input type="text" class="form-control" name="name" placeholder="Name" required/>
              </div>
              <!-- Email Address -->
            	<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <input type="email" class="form-control" name="email" placeholder="Email Address" required/>
              </div>
              <!-- Phone Number -->
              <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="text" pattern="^\d{10}$" class="form-control" name="phone" placeholder="Phone Number (9999999999)" required />
              </div>
              <!-- Rating -->
              <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <select name="reason" class="form-control" required>
                      <option value="">Rate Our Service</option>
                      <option value="1 Star(Poor)">1 Star(Poor)</option>
                      <option value="2 Star(Not Bad)">2 Star(Not Bad)</option>
                      <option value="3 Star(Good)">3 Star(Good)</option>
                      <option value="4 Star(Satisfied)">4 Star(Satisfied)</option>
                      <option value="5 Star(Excellent)">5 Star(Excellent)</option>
                  </select>
              </div>
              <!-- Message -->
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <textarea rows="6" cols="2" class="form-control" name="message" placeholder="Provide Your Feedback" required></textarea>
              </div>
              <div class="col-lg-9 col-md-9"></div>
              <!-- Submit -->
              <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <input required type="submit" class="form-control submit" value="Submit"/>
              </div>
           </ul>
      </form>
  </div>

  </div>
  </div>

@endsection
