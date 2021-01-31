@extends('front-end.master')

@section('title')
    Contact
@endsection

@section('body')
<section id="contact" class="contact">
    <div class="container" style="margin-top: 100px !important">

      <div class="section-title" data-aos="fade-up">
        <h2 style="color: #BC8C4C !important;">Contact Us</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3 style="color: #BC8C4C !important;">Sigma Digital</h3>
            <p>
                We love to hear from you. Feel free to content us if you have any queries or if you want to discuss your project with us. We are waiting for 24/7 days in a week to assure you the best experience!
            </p>
            <div class="social-links">
              <a href="https://twitter.com/sigmadigitalbd" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="https://web.facebook.com/sigmadigitalofficial/?_rdc=1&_rdr" target="_blank" class="facebook"><i class="icofont-facebook" ></i></a>
              <a href="https://www.instagram.com/sigmadigitalofficial/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="https://www.linkedin.com/company/sigmadigital/" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>Naogaon, Bangladesh</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p>support@sigmadigital.xyz</p>
            </div>

            <div>
              <i class="ri-phone-line"></i>
              <p>skype: mkbasar101</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">

          {!! Form::open(['route'=>'submit-front-inquiry', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}} </span>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}} </span>
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <span class="text-danger">{{$errors->has('message') ? $errors->first('message') : ''}} </span>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
              {{-- <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div> --}}
            </div>
            <div class="text-center">
              {{-- <button type="submit">Send Message</button> --}}
              <input type="submit" class="btn btn-primary" value="Send Message">
            </div>
          {!! Form::close() !!}
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection
