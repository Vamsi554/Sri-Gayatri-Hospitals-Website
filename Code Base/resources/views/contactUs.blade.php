@extends('layout')
@section('title', 'Contact Us')

@section('content')

  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Contact Us</h2>
     <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/srigayatri/contact') }}">Contact Us</a></p>
  </div>

  <div class="container">
    <div class="contact-us col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="contact-left-empty col-lg-1 col-md-1 col-sm-12 col-xs-12">
      </div>

      <div class="contact-left col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp">
        @if(Session::has('success'))
          <div class="alert alert-success" style="display: inline-block;">
             {{ Session::get('success') }}
                @php
                 Session::forget('success');
                @endphp
           </div>
        @endif
        <h2>Enquire Now</h2>
        <!-- Contact Us Form -->
        <form id="contactUsForm" name="contactUsForm" method="post" action="{{ url('/contactUs/save') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- Name -->
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <!-- Email Address -->
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            </div>
            <!-- Mobile -->
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <input type="text" pattern="^\d{10}$" class="form-control" name="mobile" placeholder="Mobile Number (9999999999)" maxlength="10" required>
            </div>
            <!-- Contact Type -->
           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <select name="service" class="form-control">
                <option value="">Select Treatment & Others</option>
                <option value="Surgical Oncology">Surgical Oncology</option>
                <option value="Medical Oncology">Medical Oncology</option>
                <option value="General Surgery">General Surgery</option>
                <option value="Nephrology">Nephrology</option>
                <option value="Urology">Urology</option>
                <option value="Career">Career</option>
                <option value="Others">Others</option>
              </select>
            </div>
            <!-- Message -->
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <textarea class="form-control txt_area" rows="3" name="message" placeholder="Write Your Message" required></textarea>
            </div>
            <!-- Form Submit -->
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 width-full">
                <input type="submit" class="form-control submit" value="Submit">
            </div>
          </form>
      </div>

      <div class="contact-left col-lg-5 col-md-5 col-sm-12 col-xs-12 wow fadeInRight">
          <h2>Get in touch</h2>
          <p class="wow fadeInRight" data-wow-delay="0">
                <i class="fa fa-map-marker" style="color:#00726b;font-size:2em;"></i>
                <span>Sri Gayatri Super Speciality Hospital</span><br/>
	              #30-13/1-23, Atchamamba Street,<br/>
	              Kothavanthana Road, Durga Agraharam,<br/>
	              Vijayawada, Andhra Pradesh 520002
          </p>
          <h3 class="wow fadeInRight" data-wow-delay="0.5s">
            <i class="fa fa-phone" style="color:#00726b;font-size:2em;"></i>
            <span>Call us</span><br/>9550833552, 0866 6631199, 0866 2434799</h3>
          <h4 class="wow fadeInRight" data-wow-delay="0.5s">
            <i class="fa fa-envelope" style="color:#00726b;font-size:2em;"></i>
            <span>Mail us</span><br/><a href="mailto:sgshvja@gmail.com">sgshvja@gmail.com</a></h4>
      </div>
    </div>
  </div>

  <div class="map col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1912.5890405565751!2d80.63559365746117!3d16.517104881929395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35e554695c299f%3A0x3ab642582014347b!2sSri+Gayatri+SuperSpeciality+Hospital!5e0!3m2!1sen!2sin!4v1562301655156!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

@endsection
