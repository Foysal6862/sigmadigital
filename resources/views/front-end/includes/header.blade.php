<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center" style="background-color: black !important; min-height:80px !important;">

      <div class="logo mr-auto">
        {{-- <h1 class="text-light"><a href="index.html"><span>Vesperr</span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{route('/')}} "><img src="{{asset('/')}}front/assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block" >
        <ul>
          <li class="active"><a href="{{route('/')}} " style="color: #BC8C4C !important">Home</a></li>
          <li class="drop-down"><a href="" style="color: #BC8C4C !important">Services</a>
            <ul>
                <li><a href="{{route('cms-management')}} " style="color: #BC8C4C !important">CMS Management</a></li>
                <li><a href="{{route('e-commerce')}} " style="color: #BC8C4C !important">E-commerce Management</a></li>
                <li><a href="{{route('email-marketing')}} " style="color: #BC8C4C !important">Email Marketing</a></li>
                <li><a href="{{route('marketing-automation')}} " style="color: #BC8C4C !important">Marketing Automation</a></li>
                <li><a href="{{route('virtual-assistance')}} " style="color: #BC8C4C !important">Virtual Assistance​</a></li>
                <li><a href="{{route('online-reputation-management')}} " style="color: #BC8C4C !important">Online Reputation Management</a></li>
                <li><a href="{{route('search-engine-optimization')}} " style="color: #BC8C4C !important">Search Engine Optimization</a></li>
                <li><a href="{{route('social-media-marketing')}} " style="color: #BC8C4C !important">Social Media Marketing</a></li>
                <li><a href="{{route('crm-marketing')}} " style="color: #BC8C4C !important">CRM Management</a></li>
            </ul>
      </li>
          <li><a href="{{route('our-packages')}} " style="color: #BC8C4C !important">Our Packages</a></li>
          {{-- <li><a href="#team" style="color: #BC8C4C !important">Tools We Use</a></li> --}}
          <li><a href="#team" style="color: #BC8C4C !important">Blog</a></li>
          <li><a href="{{route('about-us')}}" style="color: #BC8C4C !important">About</a></li>
          <li><a href="{{route('contact')}} " style="color: #BC8C4C !important">Contact</a></li>

          <li class="get-started"><a href="{{route('client-registation')}} " style="color: #BC8C4C !important">Client Register</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
