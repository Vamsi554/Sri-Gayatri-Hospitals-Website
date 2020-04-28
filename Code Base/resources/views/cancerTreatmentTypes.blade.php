@extends('layout')
@section('title', 'Types of Cancer Treatments')

@section('content')
  <div class="inner-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   <h2>Sri Gayatri Blog</h2>
     <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/blog') }}">Blog</a></p>
  </div>

<div class="container">
	<div class="skmshb col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<div class="skmshbs col-lg-9 col-md-9 col-sm-9 col-xs-12">
          <div class="skmshimg col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <img src="{{ asset('images/blog/types-of-cancer-treatments.jpg') }}" class="img-responsive" alt="Types of Cancer Treatments" />
          </div>
          <div class="skmshinfo col-lg-12 col-md-12 col-sm-12 col-xs-12">
      		    <h2 style="color:#fd556d;">Types of Cancer Treatments</h2>
              <p>Various types of cancer treatments are available in the medical science; however, the choice of type of treatment to be performed on a cancer patient depends upon the type of cancer he is suffering from and the extent of its advancement.</p>
              <p>Many patients may require only one treatment, while some may require more than one or in combination with other treatment. The most common types of cancer treatments are discussed here for your better understanding and learning.</p>
              <h2 style="color:#fd556d;">Surgery</h2>
              <p>Surgery is a procedure which is used to remove the cancer from your body along with the surrounding tissue that may contain cancer cells. Surgery is mostly performed when the cancer is located in a localized area. The level of surgery may not be known until the surgeon gets to know the extent of cancer while doing the surgery.</p>
              <p>The chances of curing the disease are more with surgery as it helps in taking the tumour out of the body. However, surgery seems viable only when the cancer cells have not spread to other parts of the body. The patient may require other treatments also along with surgery like chemotherapy or radiation therapy.</p>
              <h2 style="color:#fd556d;">Chemotherapy</h2>
              <p>Under treatment by chemotherapy, the patient is given strong drugs to kill cancer cells either by mouth or by injection. Chemo is useful when the cancer cells have spread throughout the body.</p>
              <p>Mostly, more than one drug is used in chemo treatment that slowly kills the cancer cells. There may arise various side effects during chemotherapy. Since the chemo drug kills the cells, it may kill those of hair follicles, mouth or digestive system. The selection of drug will depend upon the type of cancer and its stage.</p>
              <h2 style="color:#fd556d;">Radiation Therapy</h2>
              <p>Radiation Therapy, as the name suggests, uses radiation for killing the cancer cells in your body. Similar to surgery, it is mostly performed when the cancer cells or tumour is present in a localized area. Radiation therapy can be used along with chemotherapy or surgery. It is the most commonly used treatment (after chemotherapy) that a cancer patient gets.</p>
              <h2 style="color:#fd556d;">Targeted Therapy</h2>
              <p>Targeted Therapy is usually done along with other treatments. In this therapy also, the patient is treated with medicines like in chemotherapy. However, in this type, instead of killing the cancer cells, the medicines target the changes in cancer cells which results in their growth like stopping the growth of blood vessels around cancer cells. These targeted drugs can also convey your immune system to modify their proteins so that they eliminate.</p>
              <h2 style="color:#fd556d;">Other types of Treatments</h2>
              <p>Besides these common cancer treatments, there are also other treatments like Immunotherapy, Stem Cells Therapy, Hormone Therapy and Adoptive Cell Transfer (ACT). Immunotherapy is a biotherapy that builds the immune system to fight the cancer cells.</p>
              <p>In Stem Cell Transplant, the doctor uses your immature cells present in blood and bone marrow and replaces them with the cells that get killed during other treatments. Treatment under Hormone Therapy kills cancer cells that use your hormones for its growth like in Breast Cancer and Prostate Cancer.</p>
              <p>ACT is a type of immunotherapy that also uses Gene Therapy. The immune cells are taken out by the doctor and the genes are then replaced to change them so that they kill cancer cells.</p>
              <p>Cancer is a fatal disease. One may get panic and confused while getting a cancer treatment and it is advisable to discuss with your doctor and learn about different types of cancer treatments and which one will be suitable for you. This will help you to be more relax and in control during the treatment. </p>
          </div>
          <div class="clearfix"></div>
          <a href="{{ url('/') }}">Sri Gayatri Super Speciality Hospital</a>
      </div>
      <div class="skmshbsl col-lg-3 col-md-3 col-sm-3 col-xs-12">
      		<h2>Recent Blog</h2>
      		<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <li><a href="{{ url('/blog/cancerTreatment/followUp') }}">Follow-Up Care for Cancer Treatment</a></li>
              <li class="active"><a href="{{ url('/blog/cancerTreatment/types') }}">Types of Cancer Treatments</a></li>
          </ul>
      </div>
    </div>
</div>

@endsection
