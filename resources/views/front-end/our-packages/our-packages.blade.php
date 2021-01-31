@extends('front-end.master')

@section('title')
    Our Packages
@endsection

@section('body')
    <section id="our-packages" class="our-packages">
        <div class="container" style="margin-top: 100px !important">
            <div class="pricingTable">
                <h2 class="pricingTable-title">Social Media Marketing Packages</h2>

               <div class="table pt-4">
                <ul class="pricingTable-firstTable">
                    <li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header standared">Standared Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>1500</span><span>Year</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>10K real followers on each followers on each profile.</li>
                        <li>500+ on real engagement each post.</li>
                        <li>200+ contents on each profile.</li>
                        <li>Any 1 profile (Instagram, Facebook, Twitter, Pinterest)</li>
                        <li>Weekly progress report.</li>
                        <li>Profile/Page Creation, Instant Reply, Spam Monitoring, Post Design, Competitor Analysis etc</li>
                        <li>Package duration- 12 months</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li><li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header gold">Gold Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>2500</span><span>Month</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>10K real followers on each followers on each profile.</li>
                        <li>500+ on real engagement each post.</li>
                        <li>200+ contents on each profile.</li>
                        <li>Any 2 profile (Instagram, Facebook, Twitter, Pinterest)</li>
                        <li>Weekly progress report.</li>
                        <li>Profile/Page Creation, Instant Reply, Spam Monitoring, Post Design, Competitor Analysis etc</li>
                        <li>Package duration- 12 months</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li><li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header platinum">Platinum Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>3500</span><span>Month</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>10K real followers on each followers on each profile.</li>
                        <li>500+ on real engagement each post.</li>
                        <li>200+ contents on each profile.</li>
                        <li>Any 3 profile (Instagram, Facebook, Twitter, Pinterest)</li>
                        <li>Weekly progress report.</li>
                        <li>Profile/Page Creation, Instant Reply, Spam Monitoring, Post Design, Competitor Analysis etc</li>
                        <li>Package duration- 12 months</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li>
                  </ul>
               </div>
              </div>
        </div>
        <div class="container" style="margin-top: 100px !important">
            <div class="pricingTable">
                <h2 class="pricingTable-title">Complete eCommerce Packages</h2>

               <div class="table pt-4">
                <ul class="pricingTable-firstTable">
                    <li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header standared">Standared Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>800</span><span>Month</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>Full time dedicated service provider- 1</li>
                        <li> Product Research, Insert & Update in Database and social media</li>
                        <li>`Product's image editing`</li>
                        <li>Social Media Marketing on all major platforms(SMM)</li>
                        <li> Search Engine Marketing on Google, Yahoo, Bing (SEM)</li>
                        <li>Search Engine Optimization (SEO)</li>
                        <li>Customer Relation Management (CRM)</li>
                        <li>Email Marketing</li>
                        <li>Reputation Management</li>
                        <li>Weekly progress report</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li><li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header gold">Gold Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>2100</span><span>Month</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>Full time dedicated service provider- 3</li>
                        <li> Product Research, Insert & Update in Database and social media</li>
                        <li>`Product's image editing`</li>
                        <li>Social Media Marketing on all major platforms(SMM)</li>
                        <li>Search Engine Marketing on Google, Yahoo, Bing (SEM)</li>
                        <li>Search Engine Optimization (SEO)</li>
                        <li>Customer Relation Management (CRM)</li>
                        <li>Email Marketing</li>
                        <li>Reputation Management</li>
                        <li>Weekly progress report</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li><li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header platinum">Platinum Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>3500</span><span>Month</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>Full time dedicated service provider- 5</li>
                        <li>Product Research, Insert & Update in Database and social media</li>
                        <li>`Product's image editing`</li>
                        <li>Social Media Marketing on all major platforms(SMM)</li>
                        <li>Search Engine Marketing on Google, Yahoo, Bing (SEM)</li>
                        <li>Search Engine Optimization (SEO)</li>
                        <li>Customer Relation Management (CRM)</li>
                        <li>Email Marketing</li>
                        <li>Reputation Management</li>
                        <li>Weekly progress report</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li>
                  </ul>
               </div>
              </div>
        </div>
        <div class="container" style="margin-top: 100px !important">
            <div class="pricingTable">
                <h2 class="pricingTable-title">Online Reputation Management Packages</h2>

               <div class="table pt-4">
                <ul class="pricingTable-firstTable">
                    <li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header standared">Standared Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>4000</span><span>/6 Month</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>Opportunity Analysis</li>
                        <li>Strategy Setting</li>
                        <li>Damage Repair</li>
                        <li>Social Media Marketing</li>
                        <li> Blog & Forum Post</li>
                        <li>Review post</li>
                        <li>Project Duration- 6 Months</li>
                        <li>Weekly progress report.</li>
                        <li>Grow you online reputation for 1 Business/ Individual</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li><li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header gold">Gold Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>7000</span><span>/6 Month</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>Opportunity Analysis</li>
                        <li>Strategy Setting</li>
                        <li>Damage Repair</li>
                        <li>Social Media Marketing</li>
                        <li> Blog & Forum Post</li>
                        <li>Review post</li>
                        <li>Project Duration- 6 Months</li>
                        <li>Weekly progress report.</li>
                        <li>Grow you online reputation for 2 Business/ Individual</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li><li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header platinum">Platinum Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>1000</span><span>/6 Month</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>Opportunity Analysis</li>
                        <li>Strategy Setting</li>
                        <li>Damage Repair</li>
                        <li>Social Media Marketing</li>
                        <li> Blog & Forum Post</li>
                        <li>Review post</li>
                        <li>Project Duration- 6 Months</li>
                        <li>Weekly progress report.</li>
                        <li>Grow you online reputation for 3 Business/ Individual</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li>
                  </ul>
               </div>
              </div>
        </div>
        <div class="container" style="margin-top: 100px !important">
            <div class="pricingTable">
                <h2 class="pricingTable-title">Social Media Content Creation</h2>

               <div class="table pt-4">
                <ul class="pricingTable-firstTable">
                    <li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header standared">Standared Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>100</span><span>/7 days</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>50  unique and engaging contents with attracting images/infographics</li>
                        <li>Content Calendar and Scheduling</li>
                        <li>5 to 30 researched hashtags for each hashtags</li>
                        <li>Social Media profile and banner creation</li>
                        <li>Project Duration- 7 Days</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li><li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header gold">Gold Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>190</span><span>/15 days</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>100  unique and engaging contents with attracting images/infographics</li>
                        <li>Content Calendar and Scheduling</li>
                        <li>5 to 30 researched hashtags for each hashtags</li>
                        <li>Social Media profile and banner creation</li>
                        <li>Project Duration- 15 Days</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li><li class="pricingTable-firstTable_table">
                      <h1 class="pricingTable-firstTable_table__header platinum">Platinum Packege</h1>
                      <p class="pricingTable-firstTable_table__pricing"><span>$</span><span>280</span><span>/30 days</span></p>
                      <ul class="pricingTable-firstTable_table__options">
                        <li>100  unique and engaging contents with attracting images/infographics</li>
                        <li>Content Calendar and Scheduling</li>
                        <li>5 to 30 researched hashtags for each hashtags</li>
                        <li>Social Media profile and banner creation</li>
                        <li>Project Duration- 30 Days</li>
                      </ul>
                      <div class="pricingTable-firstTable_table__getstart" style="color: #FFFF !important">
                        <a href="{{route('package')}}">
                            <input type="submit" class="btn" value="Get Started Now" style="color: #FFFF !important">
                          </a>
                      </div>
                    </li>
                  </ul>
               </div>
              </div>
        </div>
    </section>
@endsection
