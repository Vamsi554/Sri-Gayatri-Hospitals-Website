@extends('layout')
@section('title', 'Follow Up Care For Cancer Treatment')

@section('content')
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Sri Gayatri Blog</h2>
     <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/blog') }}">Blog</a></p>
  </div>

  <div class="container">
  	<div class="skmshb col-lg-12 col-md-12 col-sm-12 col-xs-12">
      	<div class="skmshbs col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="skmshimg col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="{{ asset('images/blog/follow-up.jpg') }}" class="img-responsive" alt="Follow Up" />
            </div>
            <div class="skmshinfo col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 style="color:#fd556d;">Follow-Up Care for Cancer Treatment</h2>
                <p> When a person suffers from cancer the most common treatment is to remove the tumour as well as the surrounding tissue. This treatment is one of the oldest treatments and is believed to be the most effective one among other forms of cancer treatment. However, once this surgery has been done the patients need to follow postoperative care as prescribed by the doctor.</p>

                <h2 style="color:#fd556d;">Knowing about the follow-up care of cancer treatment</h2>
                <p>Once the surgery has been done on the patients, he/she needs to strictly follow post-operative care as recommended by the doctor. Follow up care for cancer means the patients need to go for regular medical check ups. A medical checkup will take help the doctor to get a pictorial view of the operated area and thus he will get to know whether any changes are required to be done or not. In the follow-up care of cancer treatment, one needs to undergo endoscopy which would help in examining the interior body parts. All these tests are very important as the doctor can figure out the changes in patient health. But the main objective of this test is to notice whether there is any possibility of recurrence of cancer from the operative part or from any other parts of the body. So it can be said that these checkups are very vital to treat and prevent other types of cancer that may result later on.</p>

                <h2 style="color:#fd556d;">Why patients must be concerned about it</h2>
                <p>Patients must be serious with the post-operative care and they must take an active part in it. If the patient experiences any symptoms then he/she must report the doctor immediately as it might indicate that cancer has returned. After the surgery, the patients must note the physical problems that disturb their daily lives. Most of the people after the surgery experience physical problems like fatigue, concentration problem and all. It is very important that the patient is serious even with small changes in their lifestyle and report to the doctor about it.</p>

                <h2 style="color:#fd556d;">The frequency of follow up care</h2>
                <p>Frankly speaking, it depends from person to person and it doesn’t have any standard frequency like two times, three times and all. So it all depends on the individual and the types of cancer that have been diagnosed. Generally, the patient needs to schedule an appointment with doctors every three-four months and may continue to report the doctor for 2 to 3 years.</p>
                <p>As mentioned earlier postoperative care plays a crucial role, so if the patient must be serious enough to maintain clear communication with the doctor. Patient must not have anything as he will ensure figuring out the abnormal cell before it turns into a cancerous cell. Other symptoms like money problem, concentration problems and fatigue are some of the common things that are observed after the surgery. If the patient feels any of the above-mentioned problems then he/she must not hesitate to report to the doctor. This problem can easily be treated by following doctor’s medications.</p>
            </div>
            <div class="clearfix"></div>
            <a href="{{ url('/') }}">Sri Gayatri Super Speciality Hospital</a>
        </div>


        <div class="skmshbsl col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h2>Recent Blog</h2>
            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <li class="active"><a href="{{ url('/blog/cancerTreatment/followUp') }}">Follow-Up Care for Cancer Treatment</a></li>
                <li><a href="{{ url('/blog/cancerTreatment/types') }}">Types of Cancer Treatments</a></li>
            </ul>
        </div>
      </div>
  </div>

@endsection
