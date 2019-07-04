@extends('layouts.app')
@section('content')
<div class="container paddingContact-container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="white">Contact Us!</h1>
            <p style="color:white">Contact us today and let us help you.</p>
          </div>
        </div>
      </div>
      <div class="parallax texture" id="parallax-cta" style="background-image:url(https://www.solodev.com/assets/hero-slider/slide1.jpg);"></div>
      <!-- contact-form -->
      <div class="container form">
        <div class="row">
          <div class="col-md-7">
            <div class="row">
              <div class="form-group col-md-12">
                <h2>Tell us About Yourself</h2>
                <p style="color: #000">Contact us today to discuss how we can Serve you better</p>
              </div>
            </div>
            <form name="contactForm" id="contactForm" method="POST" action="">
              <div class="row">
                <div class="col-md-12">
                  <div class="control-group" style="margin-bottom:30px">
                    <label><strong> First Name </strong></label>
                    <input type="text" class="demo-default form-control" placeholder="First Name">
                  </div>
                  <div class="control-group"style="margin-bottom:30px">
                    <label><strong> Last Name</strong></label>
                    <input type="text"  class="demo-default form-control" placeholder="Last Name">
                  </div>
                  <div class="control-group"style="margin-bottom:30px">
                    <label><strong> Company </strong></label>
                    <input type="text" class="demo-default form-control" placeholder="Company">
                  </div>
                  <div class="control-group"style="margin-bottom:30px">
                    <label><strong> Phone</strong></label>
                    <input type="text" class="demo-default form-control" placeholder="Telephone Number">
                  </div>
                  <div class="control-group"style="margin-bottom:30px">
                    <label><strong> Email </strong></label>
                    <input type="text" class="demo-default form-control" placeholder="yourname@domain.com">
                  </div>
                  <div class="control-group"style="margin-bottom:30px">
                    <label for="select-beast"><strong> Im Interested In:</strong></label>
                    <select id="select-beast" class="demo-default" placeholder="Select a service...">
                      <option value="">Select a service...</option>
                      <option value="4"><strong> Digital Marketing</strong></option>
                      <option value="1">Social Media</option>
                      <option value="3">E-Commerce</option>
                      <option value="5">Mobile Advertising</option>
                    </select>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group col-md-12 text-center">
                  <input type="submit" class="btn btn-primary" value="Contact Us">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 contact-right-info">
            <h2>Forex Express Head Office</h2>
            <p style="color: #000000">E-Tower, Kampala Road<br>
              
              <a href="tel:0705906727"><i class="fas fa-phone-alt"></i> +256 705 906 727</a>
            </p>

            <br><br>
            <h2>EMAIL ADDRESS</h2>
            <a href="mailto:mymyahaya@gmail.com"><i class="fas fa-envelope"></i> mymyahaya@gmail.com</a>

            <br><br>
            <h2>SUPPORT</h2>
            <a href="tel:0705906727"><i class="fas fa-phone-alt"></i> +256 705 906 727</a><br />
            <a href="mailto:support@forexexpress.com"><i class="fas fa-envelope"></i> support@forexexpress.com</a>
          </div>
        </div>
      </div>
      {{--  <!-- contact-map -->
      <div class="container">
        <div class="map-overlay">
          <h2>Changing the digital landscape one client at a time.</h2>
          <p>WebCorpCo specializes in taking your businesses data and turning it into a wide range of insights that help drive intelligent business decisions.</p>
          <a href="https://www.google.com/maps/place/800+N+Magnolia+Ave,+Orlando,+FL+32803/@28.5556405,-81.3775403,17z/data=!3m1!4b1!4m2!3m1!1s0x88e77af15a1459a5:0xa114b20cc1cdb19d" style="color: #d2282e;" target="_blank">Directions to WebCorpCo</a>
        </div>
      </div>
      <div class="map-area">
        <div id="map-canvas" style="height: 750px; width: 100%;"></div>
      </div>  --}}
@endsection