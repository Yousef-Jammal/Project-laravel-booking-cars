@extends('masterPage')

@section('content')

<div class="breadcrumb-bar">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md-12 col-12">
        <h2 class="breadcrumb-title">Contact us</h2>
      </div>
    </div>
  </div>
</div>
ءذ
<section class="contact-section">
  <div class="container">
    <div class="contact-info-area">
      <div class="row">
        <div
          class="col-lg-3 col-md-6 col-12 d-flex"
          data-aos="fade-down"
          data-aos-duration="1200"
          data-aos-delay="0.1">
          <div class="single-contact-info flex-fill">
            <span><i class="feather-phone-call"></i></span>
            <h3>Phone Number</h3>
            <a href="tel:(888)888-8888">+962 777217056</a>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 col-12 d-flex"
          data-aos="fade-down"
          data-aos-duration="1200"
          data-aos-delay="0.2">
          <div class="single-contact-info flex-fill">
            <span><i class="feather-mail"></i></span>
            <h3>Email Address</h3>
            <a
              href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection#0b616463657866627f634b6e736a667b676e25686466"><span
                class="__cf_email__"
                data-cfemail="c1abaea9afb2aca8b5a981a4b9a0acb1ada4efa2aeac">[email&#160;protected]</span></a>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 col-12 d-flex"
          data-aos="fade-down"
          data-aos-duration="1200"
          data-aos-delay="0.3">
          <div class="single-contact-info flex-fill">
            <span><i class="feather-map-pin"></i></span>
            <h3>Location</h3>
            <a href="javascript:void(0);">Amman 7th roundabout</a>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 col-12 d-flex"
          data-aos="fade-down"
          data-aos-duration="1200"
          data-aos-delay="0.4">
          <div class="single-contact-info flex-fill">
            <span><i class="feather-clock"></i></span>
            <h3>Opening Hours</h3>
            <a href="javascript:void(0);">Mon - Sat (10.00AM - 05.30PM)</a>
          </div>
        </div>
      </div>
    </div>
    <div
      class="form-info-area"
      data-aos="fade-down"
      data-aos-duration="1200"
      data-aos-delay="0.5">
      <div class="row">
        <div class="col-lg-6 d-flex">
          <img
            src="{{ asset('img/contant_us.jpg') }}"
            class="img-fluid"
            alt="Contact" />
        </div>
        <div class="col-lg-6">
          <form action="#">
            <div class="row">
              <h1>Get in touch!</h1>
              <div class="col-md-12">
                <div class="input-block">
                  <label>Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder />
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-block">
                  <label>Email Address
                    <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder />
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-block">
                  <label>Phone number
                    <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder />
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-block">
                  <label>Comments <span class="text-danger">*</span></label>
                  <textarea
                    class="form-control"
                    rows="4"
                    cols="50"
                    placeholder>
                        </textarea>
                </div>
              </div>
            </div>
            <button class="btn contact-btn">Send Enquiry</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection