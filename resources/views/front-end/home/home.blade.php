@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')
<section id="hero" class="d-flex align-items-center" style="margin-top: 150px !important">

    <div class="container" >
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: darkgray !important; height:500px !important ">
            <div class="carousel-inner">
              <div class="carousel-item active " style="background-color: #E5E5E5 !important; color: black !important;">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <img src="{{asset('/')}}front/assets/img/slide/1.png" style="height:500px !important; width:100% !important; background-color:#E5E5E5 " alt="">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <img src="{{asset('/')}}front/assets/img/slide/2.png" style="height:500px !important; width:100% !important " alt="">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <img src="{{asset('/')}}front/assets/img/slide/3.png" style="height:500px !important; width:100% !important " alt="">
                        </div>
                    </div>
              </div>
              <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <img src="{{asset('/')}}front/assets/img/slide/4.png" style="height:500px !important; width:100% !important " alt="">
                        </div>
                    </div>
              </div>
              <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <img src="{{asset('/')}}front/assets/img/slide/5.png" style="height:500px !important; width:100% !important " alt="">
                        </div>
                    </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Why Choose Us ?</h2>
        </div>

        <div class="container p-5" style="background-color: #F1F1F2 !important; margin-top: 30px !important; ">
          <div style="color: #ffff !important;" data-aos="fade-up">
              <div class="row p-2">
                  <div class="col-sm-6 p-2">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #00AFD6 !important">
                      <div class="card-body p-5">
                      <h4 class="card-title">We are innovative. ​</h4>
                      <p class="card-text">
                        We always search for new ideas and strategies that can help you to reach your goal. We are committed to apply new method to bring better result.
                      ​</p>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-6 p-2">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #A31C41 !important">
                      <div class="card-body p-5">
                      <h4 class="card-title">We are Respectful.</h4>
                      <p class="card-text">
                        `We respect your feedback and every cent of your money. That's why we work hard for giving you the best always.`
                      </p>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="row p-2">
                  <div class="col-sm-6 p-2">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #FDA928 !important">
                      <div class="card-body p-5">
                      <h4 class="card-title">We are communicative.</h4>
                      <p class="card-text">
                        We believe in strong and effective communication with clients, colleagues and our community. -- Done
                      </p>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-6 p-2">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #F2693B !important">
                      <div class="card-body p-5">
                      <h4 class="card-title">We provide quality work. ​</h4>
                      <p class="card-text">We apply our strategies after verifying them properly. We aware about everything that can help you or harm you.​​</p>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="row p-2">
                  <div class="col-sm-6 p-2">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #003c8f !important">
                      <div class="card-body p-5">
                      <h4 class="card-title">We love to take challenges.</h4>
                      <p class="card-text">We have a strong and energetic team. We love to take any challenges related to our services.</p>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-6 p-2">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #1b5e20 !important">
                      <div class="card-body p-5">
                      <h4 class="card-title">We are collaborative. </h4>
                      <p class="card-text">We work hard and collaborate each other to bring the best result for you.​​</p>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <section id="section" class="section" style=" margin-top: -40px !important; >
      <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Our Services</h2>
          </div>

        <div class="container p-5" style="background-color: #F1F1F2 !important; margin-top: 30px !important; ">
          <div style="color: #ffff !important;" data-aos="fade-up">
              <div class="row p-2">
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #003c8f !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">CMS Management​</h4>
                      <p class="card-text">
                        We have very skilled team for any CMS development or managing them as well.
                      ​</p>
                      <div style="text-align: center !important">
                        <a href="{{route('cms-management')}} " target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #F2693B !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">E-commerce Management</h4>
                      <p class="card-text">We offer complete eCommerce management service. We are available for any marketplaces or individual websites.
                      </p>
                      <div style="text-align: center !important">
                        <a href="{{route('e-commerce')}}" target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #1b5e20  !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">Email Marketing</h4>
                      <p class="card-text">Individual or bulk, manual or automatics, promotional or follow up, we are available for all kind of email marketing services.
                      </p>
                      <div style="text-align: center !important">
                        <a href="{{route('email-marketing')}}" target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="row p-2">
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #003c8f !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">Marketing Automation</h4>
                      <p class="card-text">Take our help to automate your marketing strategies.</p>
                      <div style="text-align: center !important">
                        <a href="{{route('marketing-automation')}}" target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #F2693B !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">Virtual Assistance​</h4>
                      <p class="card-text">We have very skilled and dedicated team who can assist you virtually and save your big amount of money every month.​​</p>
                      <div style="text-align: center !important">
                        <a href="{{route('virtual-assistance')}}" target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #1b5e20  !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">Online Reputation Management</h4>
                      <p class="card-text">We know the value of good reputation, Hire us for getting 5* reputation in the internet, we can easily make you great in online.​​</p>
                      <div style="text-align: center !important">
                        <a href="{{route('online-reputation-management')}}" target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="row p-2">
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #003c8f !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">Search Engine Optimization</h4>
                      <p class="card-text">SEO is one of the most vital factor for rank your website on top of search engines. Hire us to get assist from most skilled team.</p>
                      <div style="text-align: center !important">
                        <a href="{{route('search-engine-optimization')}}" target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #F2693B !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">Social Media Marketing​</h4>
                      <p class="card-text">Billions of user are using social media everyday. You can think your digital marketing strategy without social media marketing. Hire us for creating strong social media presence and increase your ROI.​​</p>
                      <div style="text-align: center !important">
                        <a href="{{route('social-media-marketing')}}" target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4 p-4">
                  <div class="card h-100 d-inline-block w-100" style="background-color: #1b5e20 !important">
                      <div class="card-body p-4">
                      <h4 class="card-title">CRM Management</h4>
                      <p class="card-text">We can help you to build strong relation with your customers. We always say make them happy, get them back again.</p>
                      <div style="text-align: center !important">
                        <a href="{{route('crm-marketing')}} " target="_blank"><button type="btn" class="btn btn-dark btn-round mt-4" >Read More</button></a>
                      </div>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->




    <section id="team" class="team section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2> OUR RECOMMENDED HOSTING PROVIDERS</h2>
          </div>

          <div class="row">

            <div class="col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img com-md-4">
                    <a href=" https://www.hostg.xyz/aff_c?offer_id=6&aff_id=19934" target="_blank">
                        <img src="{{asset('/')}}front/assets/img/banner/Hostinger Banner.png" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>
              </div>

            <div class="col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img com-md-4">
                    <a href="https://partners.hostgator.com/EPzQP" target="_blank">
                        <img src="{{asset('/')}}front/assets/img/banner/Hostgator Banner.png" class="img-fluid" alt="">
                    </a>
                  </div>
                </div>
              </div>

            <div class="col-md-4 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img com-md-4">
                  <a href="https://mbsy.co/3ldMWj" target="_blank">
                    <img src="{{asset('/')}}front/assets/img/banner/Dream Host Banner.png" class="img-fluid" alt="">
                  </a>
                </div>
              </div>
            </div>


          </div>

        </div>
      </section>


<!-- End More Services Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('/')}}front/assets/img/testimonials/Amy Adam.jpg" class="testimonial-img" alt="">
              <h3>Amy Adam</h3>
              <h4>Owner of Toronto Beauty Lounge</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Thanks for growing up my social media profiles. Wishing you all the best...
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('/')}}front/assets/img/testimonials/Diego Paiva.jpg" class="testimonial-img" alt="">
              <h3>Diego Paiva</h3>
              <h4>Owner, Totem Education</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                They are very helpful, reliable and hard worker. Their social media strategy really worked for my business. Wishing you all the best guys!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('/')}}front/assets/img/testimonials/Jason Werkman.jpg" class="testimonial-img" alt="">
              <h3>Jason Werkman</h3>
              <h4>Owner, Werkman Transport</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Sigma Digital helped me a lot for improving my social media presence. Keep it up guys...!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('/')}}front/assets/img/testimonials/Patrick Bramley.jpg" class="testimonial-img" alt="">
              <h3>Patrick Bramley</h3>
              <h4>Owner, Grove Electric Ltd.</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Wishing you all the best, guys! You guys are really dedicated to your work. Thanks for everything.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('/')}}front/assets/img/testimonials/processed.jpeg" class="testimonial-img" alt="">
              <h3>Md. Abdul Momin</h3>
              <h4>Owner, Edeal</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                `They keep their commitment always. I am their regular client. Let's hope for the best!`
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('/')}}front/assets/img/testimonials/Sheri Braaksma.jpg" class="testimonial-img" alt="">
              <h3>Sheri Braaksma</h3>
              <h4>Owner, SBSC Ventures Inc.</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Thanks guys for doing fantastic job for me. I will surely come back again.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Team</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('/')}}front/assets/img/team/team-1.png" class="img-fluid" alt="" style="max-width: 100% !important; height:250px !important;">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://web.facebook.com/khairul.basar.376" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Khairul Basar</h4>
                <span>Founder & Owner</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{asset('/')}}front/assets/img/team/team-2.png" class="img-fluid" alt="" style="max-width: 100% !important; height:250px !important;">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://web.facebook.com/profile.php?id=100014407729051&_rdc=1&_rdr" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jamal Uddin</h4>
                <span>SEO Executive</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{asset('/')}}front/assets/img/team/team-3.png" class="img-fluid" alt="" style="max-width: 100% !important; height:250px !important;">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://web.facebook.com/dalim.ahmed.104?_rdc=1&_rdr" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Imam Hossain</h4>
                <span>SMM Executive</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{asset('/')}}front/assets/img/team/team-4.jpg" class="img-fluid" alt=""  style="max-width: 100% !important; height:250px !important;">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://web.facebook.com/bubt.yasir/" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Yasir Arafat</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="section-title">
        <h2>Our Clients</h2>
      </div>
      <div class="container">
        <div class="row">
            @foreach ($clients as $client)
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="{{$client->add_client_url}}" target="_blank"><img src="{{asset($client->logo ?? '')}}" class="img-fluid" alt="" data-aos="zoom-in" style="width:110px !important; height:120px"></a>
                </div>
            @endforeach


        </div>

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->
@endsection
