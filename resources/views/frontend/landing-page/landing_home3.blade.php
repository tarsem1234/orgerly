@extends ('frontend.layouts.app')
@section ('title', ('Landing Page'))

@section ('meta_description', ('Freezylist is a Free and Easy Real Estate Application for the By Owner Community. 
                                Their Software covers homeowners in buying and selling, renting and leasing, Timeshares and Vacation Rentals.'))
@section ('meta_keywords', ('Real Estate, Exchange, Timeshare, Timeshare Rental, Rental, buy, sell, rent, list, automation, contracts, template, documents, free, easy,
                            Listings, Learning, Education, Social, Support, Services, Realty, Agents, Brokers, Software, App, Google Maps, API, Signatures,
                            Closing, Settlement, Owner, Craigslist, Zillow, HotPads, Trulia, FSBO, FRBO, VRBO, Narwhal'))

@section('after-styles')
<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
</style>

<link type="text/css" rel="stylesheet" href="{{ asset('css/icomoon.css') }}" media="all">  
<link type="text/css" rel="stylesheet" href="{{ asset(mix('css/landing-page.css')) }}" media="all">
@endsection 
@section('content')


    <!--<div class="jquery-carousel">
        <div class="carousel" id="jquery-carousel">
            <div class="slides">
                <div class="slideItem"> 
                    <a href="#"><img src="{{asset('storage/home/Listings For Sale.jpg')}}" class="img-responsive"></a>
                    <div class="shadow">
                        <div class="shadowLeft"></div>
                        <div class="shadowMiddle"></div> 
                        <div class="shadowRight"></div>
                    </div>
                </div>
                <div class="slideItem">
                    <a href="#"><img src="{{asset('storage/home/Listings For Rent.jpg')}}" class="img-responsive"></a>
                    <div class="shadow">
                        <div class="shadowLeft"></div>
                        <div class="shadowMiddle"></div>
                        <div class="shadowRight"></div>
                    </div>
                </div>
                <div class="slideItem">
                    <a href="#"><img src="{{asset('storage/home/Pro Network.jpg')}}" class="img-responsive"></a>
                    <div class="shadow">
                        <div class="shadowLeft"></div>
                        <div class="shadowMiddle"></div>
                        <div class="shadowRight"></div>
                    </div>
                </div>
                <div class="slideItem">
                    <a href="#"><img src="{{asset('storage/home/Other Features.jpg')}}" class="img-responsive"></a>
                    <div class="shadow">
                        <div class="shadowLeft"></div>
                        <div class="shadowMiddle"></div>
                        <div class="shadowRight"></div>
                    </div>
                </div>
                <div class="slideItem">
                    <a href="#"><img src="{{asset('storage/home/Education Portal.jpg')}}" class="img-responsive"></a>
                    <div class="shadow">
                        <div class="shadowLeft"></div>
                        <div class="shadowMiddle"></div>
                        <div class="shadowRight"></div>
                    </div>
                </div>
                <div class="slideItem">
                    <a href="#"><img src="{{asset('storage/home/Timeshare Exchange.jpg')}}" class="img-responsive"></a>
                    <div class="shadow">
                        <div class="shadowLeft"></div>
                        <div class="shadowMiddle"></div>
                        <div class="shadowRight"></div>
                    </div>
                </div>
            </div> 
        </div>
    
    </div>
</div> -->
<div class="elementor-27">
    <hr style="border: 2px solid #262626;margin-top: 5px;margin-bottom: 5px;" />
    <div class="wrapper listing main-support">    
        <div class="container"> 
            <div class="col-lg-12 ">
                <div class="col-lg-6">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5aa11fc elementor-widget elementor-widget-heading" data-id="5aa11fc" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">About the company</h3>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-13c67d1 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="13c67d1" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="elementor-element elementor-element-a033860 elementor-widget elementor-widget-heading" data-id="a033860" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Your Benefits Are Our Priority</h2>      
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-ff41146 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="ff41146" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper">

                                <div class="elementor-icon-box-icon">
                                    <a href="#" class="elementor-icon elementor-animation-" tabindex="-1">
                                        <i aria-hidden="true" class=" icon-recruit"></i>                </a>
                                </div>
                    
                                <div class="elementor-icon-box-content">
                                    <p class="elementor-icon-box-description"> Many small to medium businesses are often under-served by traditional benefits consultants, leading to higher costs and nominal protections from renewal increases. We support many options for our clients.                    
                                    </p>
                        
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="elementor-element elementor-element-13136a3 e-flex e-con-boxed e-con e-parent e-lazyloaded" data-id="13136a3" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-4d8f60c elementor-widget elementor-widget-sultin_slogan_area" data-id="4d8f60c" data-element_type="widget" data-widget_type="sultin_slogan_area.default">
                                <div class="elementor-widget-container">
                                    <section class="slogan-area">
                                        <div class="slogan-area__bg"></div>
                                        <div class="shape wow slideInRight animated" data-wow-delay="1400ms" data-wow-duration="5500ms" style="background-image: url(&quot;https://orgerly.info/wp-content/uploads/2022/05/shape-1.png&quot;); visibility: visible; animation-duration: 5500ms; animation-delay: 1400ms; animation-name: slideInRight;">
                                        </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="slogan-text-box">
                                                    <h2 class="paroller" style="transform: translateY(-13px); transition: transform 0.6s cubic-bezier(0, 0, 0, 1); will-change: transform;">We Solve Pain Points <span style="background-image: url();">With Benefit Design</span><br>
                                                        &amp; HRIS Integrations<br></h2>
                                                    <div class="slogan-btn-box paroller" style="transform: translateY(-24px); transition: transform 0.6s cubic-bezier(0, 0, 0, 1); will-change: transform;">
                                                        <a class="btn-one" href="#">
                                                            <span class="txt">Discover Our Solutions</span>
                                                        </a>
                                                    </div>

                                                    <div class="parallax-scene parallax-scene-1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                                                        <div data-depth="0.20" class="parallax-layer shape" style="transform: translate3d(-2.5px, -0.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                                            <div class="experience-box">
                                                                <!-- <h2></h2> -->
                                                                <p class="curved-circle">Integrated<br>IT Solution<br>Partners</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                
            </div>
        </div>
    </div>
    <hr style="border: 2px solid #262626; margin-bottom: 0px;" />
    <div class="wrapper tailor_witness">    
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <h3>Tailored Wellness Strategies & Reward Systems</h3>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-user button"><b>Employee Registration</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr style="border: 2px solid #2FBAD1; margin-bottom: 0px;margin-top: 5px;" />
    <section class="elementor-section elementor-top-section elementor-element elementor-element-bf1f5d5 elementor-section-full_width elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default " data-id="bf1f5d5" data-element_type="section">

       <div class="elementor-background-overlay"></div>
       <div class="elementor-container elementor-column-gap-default">

          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dae2779" data-id="dae2779" data-element_type="column">
             <div class="elementor-widget-wrap elementor-element-populated">
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-af445a4 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="af445a4" data-element_type="section">
                   <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bae7a02" data-id="bae7a02" data-element_type="column">
                         <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-163c7f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="163c7f1" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6739719" data-id="6739719" data-element_type="column">
                                     <div style="margin: 20px -90px 0px 0px;"; class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-57087f1 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-right elementor-widget elementor-widget-divider" data-id="57087f1" data-element_type="widget" data-widget_type="divider.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-divider">
                                                 <span class="elementor-divider-separator">
                                                 <span class="elementor-divider__text elementor-divider__element">WHAT WE DO</span>
                                                 </span>
                                              </div>
                                           </div>
                                        </div>

                                        <div class="elementor-element elementor-element-7093125 elementor-widget elementor-widget-heading" data-id="7093125" data-element_type="widget" data-widget_type="heading.default">
                                           <div class="elementor-widget-container">
                                              <h2 class="elementor-heading-title elementor-size-default">Group Benefit Advisory Services</h2>
                                           </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8f0dd70 elementor-widget elementor-widget-text-editor" data-id="8f0dd70" data-element_type="widget" data-widget_type="text-editor.default">
                                           <div class="elementor-widget-container">
                                              <p>Our job is to save your organization on costs and administrative headaches by building unique solutions for your company.</p>
                                              <p>&nbsp;</p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                         </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0154243" data-id="0154243" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                         <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-bad50fe elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bad50fe" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dbfee6c" data-id="dbfee6c" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ca4f07d elementor-widget elementor-widget-sultin_service_box" data-id="ca4f07d" data-element_type="widget" data-widget_type="sultin_service_box.default">
                                           <div class="elementor-widget-container">
                                              <div class="single-service-style1">
                                                 <div class="shape-box"></div>
                                                 <div class="icon-holder">
                                                    <span class=" icon-report"></span>
                                                 </div>
                                                 <div class="title-holder">
                                                    <h3>
                                                       <a href="#">Group Benefit <br> Consulting</a>
                                                    </h3>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2d98629" data-id="2d98629" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7ea7f47 elementor-widget elementor-widget-sultin_service_box" data-id="7ea7f47" data-element_type="widget" data-widget_type="sultin_service_box.default">
                                           <div class="elementor-widget-container">
                                              <div class="single-service-style1">
                                                 <div class="shape-box"></div>
                                                 <div class="icon-holder">
                                                    <span class=" icon-global"></span>
                                                 </div>
                                                 <div class="title-holder">
                                                    <h3>
                                                       <a href="#">Captive Insurance <br> Partners</a>
                                                    </h3>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-aec180b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="aec180b" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d32e3ca" data-id="d32e3ca" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-99bf081 elementor-widget elementor-widget-sultin_service_box" data-id="99bf081" data-element_type="widget" data-widget_type="sultin_service_box.default">
                                           <div class="elementor-widget-container">
                                              <div class="single-service-style1">
                                                 <div class="shape-box"></div>
                                                 <div class="icon-holder">
                                                    <span class=" icon-business"></span>
                                                 </div>
                                                 <div class="title-holder">
                                                    <h3>
                                                       <a href="#">Self Insurance <br> Solutions</a>
                                                    </h3>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e464113" data-id="e464113" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4c057e3 elementor-widget elementor-widget-sultin_service_box" data-id="4c057e3" data-element_type="widget" data-widget_type="sultin_service_box.default">
                                           <div class="elementor-widget-container">
                                              <div class="single-service-style1">
                                                 <div class="shape-box"></div>
                                                 <div class="icon-holder">
                                                    <span class=" icon-protection"></span>
                                                 </div>
                                                 <div class="title-holder">
                                                    <h3>
                                                       <a href="#">Administrative<br> Support</a>
                                                    </h3>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                         </div>
                      </div>
                   </div>
                </section>
             </div>
          </div>
       </div>
    </section> 
    <section>
        <hr style="border: 2px solid #262626; margin-bottom: 0px;" />
        <div class="wrapper advance_support">    
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="col-lg-6">
                            <a href="#" class="btn btn-user button"><b>Organization Registration</b></a>
                        </div>
                        <div class="col-lg-6">
                            <h3>Advance Your Cause & Support Our Members</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="border: 2px solid #FF9E00; margin-bottom: 0px;margin-top: 5px;" />
        <!-- <div class="row welcome-freezylist-row"> 
            <div class="container">
                <div class="col-sm-12 welcome-freezylist">
                    <div class="col-sm-12  col-xs-12 heading-para">
                        
                            <hr style="border: 4px solid white;margin-top: 0px;margin-bottom: 10px;" />
                       
                            <?php if (!Auth::check()) { ?>
                                
                                <div class="col-sm-12 col-xs-12 btn-sign-up">
                                    <a href="{{ route('frontend.userCreate') }}" class="btn btn-user"><b>Create User Account</b></a>
                                    <a href="{{ route('frontend.businessCreate') }}" class="btn btn-business"><b>Register My Business</b></a>
                                </div>
                                
                                <h4> Create your free account & gain complete access</h4>  
                            <?php } ?>
                            <hr style="border: 4px solid white;margin-top: 0px;margin-bottom: 0px;" />
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-bf1f5d5 elementor-section-full_width elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default   " data-id="bf1f5d5" data-element_type="section">
       <div class="elementor-background-overlay_2"></div>
       <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dae2779" data-id="dae2779" data-element_type="column">
             <div class="elementor-widget-wrap elementor-element-populated">
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-af445a4 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="af445a4" data-element_type="section">
                   <div class="second_block elementor-container elementor-column-gap-default">
                      
                      
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0154243" data-id="0154243" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

                         <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-bad50fe elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bad50fe" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dbfee6c" data-id="dbfee6c" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ca4f07d elementor-widget elementor-widget-sultin_service_box" data-id="ca4f07d" data-element_type="widget" data-widget_type="sultin_service_box.default">
                                           <div class="elementor-widget-container">
                                              <div class="single-service-style1">
                                                 <div class="shape-box"></div>
                                                 <div class="icon-holder">
                                                    <span class=" icon-report"></span>
                                                 </div>
                                                 <div class="title-holder">
                                                    <h3>
                                                       <a href="#">Certified Fitness & <br> Dietary Experts</a>
                                                    </h3>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2d98629" data-id="2d98629" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7ea7f47 elementor-widget elementor-widget-sultin_service_box" data-id="7ea7f47" data-element_type="widget" data-widget_type="sultin_service_box.default">
                                           <div class="elementor-widget-container">
                                              <div class="single-service-style1">
                                                 <div class="shape-box"></div>
                                                 <div class="icon-holder">
                                                    <span class=" icon-global"></span>
                                                 </div>
                                                 <div class="title-holder">
                                                    <h3>
                                                       <a href="#">Mental Health <br> Experts</a>
                                                    </h3>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-aec180b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="aec180b" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d32e3ca" data-id="d32e3ca" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-99bf081 elementor-widget elementor-widget-sultin_service_box" data-id="99bf081" data-element_type="widget" data-widget_type="sultin_service_box.default">
                                           <div class="elementor-widget-container">
                                              <div class="single-service-style1">
                                                 <div class="shape-box"></div>
                                                 <div class="icon-holder">
                                                    <span class=" icon-business"></span>
                                                 </div>
                                                 <div class="title-holder">
                                                    <h3>
                                                       <a href="#">Family Support <br> Networks</a>
                                                    </h3>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e464113" data-id="e464113" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4c057e3 elementor-widget elementor-widget-sultin_service_box" data-id="4c057e3" data-element_type="widget" data-widget_type="sultin_service_box.default">
                                           <div class="elementor-widget-container">
                                              <div class="single-service-style1">
                                                 <div class="shape-box"></div>
                                                 <div class="icon-holder">
                                                    <span class=" icon-protection"></span>
                                                 </div>
                                                 <div class="title-holder">
                                                    <h3>
                                                       <a href="#">Charitable<br> Enrichment</a>
                                                    </h3>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                         </div>
                      </div>

                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bae7a02" data-id="bae7a02" data-element_type="column">
                         <div style="margin: 20px 0px 0px 100px;"; class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-163c7f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="163c7f1" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6739719" data-id="6739719" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-57087f1 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-right elementor-widget elementor-widget-divider" data-id="57087f1" data-element_type="widget" data-widget_type="divider.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-divider">
                                                 <span class="elementor-divider-separator">
                                                 <span class="elementor-divider__text elementor-divider__element">WHAT WE DO</span>
                                                 </span>
                                              </div>
                                           </div>
                                        </div>

                                        <div class="elementor-element elementor-element-7093125 elementor-widget elementor-widget-heading" data-id="7093125" data-element_type="widget" data-widget_type="heading.default">
                                           <div class="elementor-widget-container">
                                              <h2 class="elementor-heading-title elementor-size-default">Local Organization Network Engagement</h2>
                                           </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8f0dd70 elementor-widget elementor-widget-text-editor" data-id="8f0dd70" data-element_type="widget" data-widget_type="text-editor.default">
                                           <div class="elementor-widget-container">
                                              <p>Our job is to save your organization on costs and administrative headaches by building unique solutions for your company.</p>
                                              <p>&nbsp;</p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                         </div>
                      </div>
                   </div>
                </section>
             </div>
          </div>
       </div>
    </section> 
</div>
    


<div class="row need-some-assistance"> 
    <div class="container">
        <div class="col-sm-12 col-xs-12"> 
            <p>
                Need some assistance?<a href="#" class="btn btn-lg btn-contact-us">Contact us</a>
            </p>
        </div>
    </div>
</div>
@include('frontend.form-contact-us.form_contact_us')
@endsection

@section('after-scripts')
<script>

    $(function () {

        $('.form-we-help-you').validate({
            rules: {
                email: {
                    email: true
                }
            },
            messages: {
                name: "Please enter your name",
                email: {
                    required: "Please fill your email id",
                    email: "Please enter your correct email id"
                },
                phone: "Please enter your phone number",
                address: "Please enter your address",
                comment: "Plese share your views"
            }
        });

        $('.form-we-help-you').on('submit', function(e) {
            if(grecaptcha.getResponse() == "") {
                e.preventDefault();
//                console.log("hi");
                $('#captchaError').html('<label class="error">Please prove you are not a Robot</label>');
            } else {
                $('#captchaError').hide();
            }
        });


        /*form-open*/
        $(".btn-contact-us").click(function (e) {
            $(".form-we-help-you").toggle();
            e.preventDefault();
        });

        /*isotope-plugin*/
        var $grid = $('.grid').isotope({
            itemSelector: '.main-support-img'
//                 layoutMode: 'fitRows'
        });
        $('.filter-button-group a').on('click', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: function () {
                    return $(this).attr('data-filter') === filterValue;
                }
            });
        });
        $('.filter-button-group a').first().trigger('click');

        /*jquery-carousel-plugin*/

        $('#jquery-carousel').carousel({
            carouselWidth: 1140,
            carouselHeight: 383,
            directionNav: true,
            buttonNav: 'bullets',
            frontWidth: 500,
            frontHeight: 380,
            responsive: true,
            shadow: false,
            reflection: false,
            autoplay: false
        });
    });

    (function ($) {

        'use strict';

        $(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function (e) {
            var $target = $(e.target);
            var $tabs = $target.closest('.nav-tabs-responsive');
            var $current = $target.closest('li');
            var $parent = $current.closest('li.dropdown');
            $current = $parent.length > 0 ? $parent : $current;
            var $next = $current.next();
            var $prev = $current.prev();
            var updateDropdownMenu = function ($el, position) {
                $el
                        .find('.dropdown-menu')
                        .removeClass('pull-xs-left pull-xs-center pull-xs-right')
                        .addClass('pull-xs-' + position);
            };

            $tabs.find('>li').removeClass('next prev');
            $prev.addClass('prev');
            $next.addClass('next');

            updateDropdownMenu($prev, 'left');
            updateDropdownMenu($current, 'center');
            updateDropdownMenu($next, 'right');
        });

    })(jQuery);

    var recaptchaCallback = function () {
        console.log('recaptcha is ready'); // showing
        grecaptcha.render("recaptcha", {
            sitekey: '6Ldn9GgUAAAAABCm-PeXaauq8WqXpvaH0RRRkJw_',
            callback: function () {
                console.log('recaptcha callback');
            }
        });
    }
</script>
@if (config('access.captcha.registration'))
{!! NoCaptcha::renderJs('fr', true, 'recaptcha_callback') !!}
<script>
    function recaptcha_callback() {
        $('#captchaError').hide();
    }
</script>
<style type="text/css">
    .welcome-freezylist-row{
        padding-top: 5px;
        padding-bottom: 5px;
        margin: 20px 0px 0px 0px;
    }
.second_block .single-service-style1 .icon-holder span:before
{
    color: #FF9E00;
}
.tailor_witness

{
    text-align: center;
}
.tailor_witness h3{
        font-family: 'DM Sans';
    font-weight: bold;
    color: #262626;
}
.tailor_witness .button {
    font-family: dm;
    font-size: 24px;
    font-family: 'DM Sans';
    font-weight: 100;
    border-radius: 22px;
    padding: 4px 40px;
    margin-bottom: 20px;
    background-color: #0BC8FF;
    border-color: #0BC8FF;
    color: #ffffff;
    margin-top: 15px;
    margin-bottom: 11px;
    letter-spacing: 1px;
}
.tailor_witness .button:hover
{
    color: #0BC8FF;
    background-color: #fff;
    border-color: #0BC8FF;
}
.advance_support

{
    text-align: center;
}
.advance_support h3{
        font-family: 'DM Sans';
    font-weight: bold;
    color: #262626;
}
.advance_support .button {
    font-family: dm;
    font-size: 24px;
    font-family: 'DM Sans';
    font-weight: 100;
    border-radius: 22px;
    padding: 4px 40px;
    margin-bottom: 20px;
    background-color: #FF9E00;
    border-color: #FF9E00;
    color: #ffffff;
    margin-top: 15px;
    margin-bottom: 11px;
    letter-spacing: 1px;
}
.advance_support .button:hover
{
    color: #FF9E00;
    background-color: #fff;
    border-color: #FF9E00;
}
.elementor-27 .elementor-element.elementor-element-1bc11fc .main-slider .slide .image-layer:before {
    background-color: #0BC8FF;
}
.elementor-widget-icon-box.elementor-position-left .elementor-icon-box-icon, .elementor-widget-icon-box.elementor-position-right .elementor-icon-box-icon {
    display: inline-flex;
    flex: 0 0 auto;
}
.elementor a {
    box-shadow: none;
    text-decoration: none;
}
.elementor-icon {
    display: inline-block;
    line-height: 1;
    transition: all .3s;
    color: #69727d;
    font-size: 50px;
    text-align: center;
}
.elementor-widget-icon-box .elementor-icon-box-content {
    flex-grow: 1;
}
.elementor-widget-icon-box .elementor-icon-box-description {
    margin: 0;
}
.elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper {
    text-align: start;
    flex-direction: row;
}
.elementor-widget-icon-box.elementor-position-left .elementor-icon-box-icon
{
    margin-right: var(--icon-box-icon-margin, 15px);
    margin-left: 0;
    margin-bottom: unset;
}
.elementor-icon i, .elementor-icon svg {
    width: 1em;
    height: 1em;
    position: relative;
    display: block;
}
.elementor-icon i:before, .elementor-icon svg:before {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
.elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper, .elementor-widget-icon-box.elementor-position-right .elementor-icon-box-wrapper {
    display: flex;
}
.elementor-27 .elementor-element.elementor-element-1bc11fc .main-slider .shape-box {
    background-color: #000000;
}

.elementor-27 .elementor-element.elementor-element-bf1f5d5 > .elementor-background-overlay {
    background-color: transparent;
    background-image: linear-gradient(90deg, #000000 50%, #FFFFFF 0%);
    opacity: 1;
}
.elementor-background-overlay_2 {
    background-color: transparent;
    background-image: linear-gradient(90deg, #ffffff 50%, #000000 50%);
    opacity: 1;
}
.elementor-27 .elementor-element.elementor-element-bf1f5d5 {
    padding: 0px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-dae2779 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-af445a4 > .elementor-container {
    max-width: 1170px;
}

.elementor-27 .elementor-element.elementor-element-af445a4 {
    margin-top: 0px;
    margin-bottom: 0px;
    padding: 0px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-bae7a02 > .elementor-element-populated {
    margin: 0px 0px 0px 0px;
    --e-column-margin-right: 0px;
    --e-column-margin-left: 0px;
    padding: 100px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-6739719 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-57087f1 {
    --divider-border-style: solid;
    --divider-color: #20BAD1;
    --divider-border-width: 2px;
}

/*.elementor-27 .elementor-element.elementor-element-57087f1 .elementor-divider-separator {
    width: 25px;
}*/
.elementor-widget-divider--view-line_icon .elementor-divider-separator, .elementor-widget-divider--view-line_text .elementor-divider-separator {
    align-items: center;
}
.elementor-27 .elementor-element.elementor-element-57087f1 .elementor-divider__text {
    color: #818891;
    font-family: "DM Sans", sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    line-height: 20px;
    letter-spacing: 1.2px;
}

.elementor-27 .elementor-element.elementor-element-7093125 .elementor-heading-title {
    color: #FFFFFF;
    font-family: "Roboto", sans-serif;
    font-size: 44px;
    font-weight: 700;
    text-transform: capitalize;
    line-height: 1.2em;
    letter-spacing: -0.02px;
}

.elementor-27 .elementor-element.elementor-element-7093125 > .elementor-widget-container {
    margin: -12px 0px 15px 0px;
}

.elementor-27 .elementor-element.elementor-element-8f0dd70 {
    color: #818891;
    font-family: "DM Sans", sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 34px;
}

.elementor-27 .elementor-element.elementor-element-8f0dd70 > .elementor-widget-container {
    padding: 0px 30px 0px 0px;
}

.elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-0154243.elementor-column .elementor-widget-wrap {
    align-items: flex-end;
}

.elementor-27 .elementor-element.elementor-element-0154243.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
    align-content: flex-end;
    align-items: flex-end;
}

.elementor-27 .elementor-element.elementor-element-0154243 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 20px;
}

.elementor-27 .elementor-element.elementor-element-0154243:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-27 .elementor-element.elementor-element-0154243 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: #FFFFFF;
}

.elementor-27 .elementor-element.elementor-element-0154243 > .elementor-element-populated {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin: 0px 0px 0px 0px;
    --e-column-margin-right: 0px;
    --e-column-margin-left: 0px;
    padding: 70px 0px 50px 100px;
}
.second_block .elementor-element.elementor-element-0154243 > .elementor-element-populated {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin: 0px 0px 0px 0px;
    --e-column-margin-right: 0px;
    --e-column-margin-left: 0px;
    padding: 100px 80px 50px 0px;
}
.elementor-27 .elementor-element.elementor-element-0154243 > .elementor-element-populated > .elementor-background-overlay {
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-27 .elementor-element.elementor-element-bad50fe > .elementor-container > .elementor-column > .elementor-widget-wrap {
    align-content: flex-end;
    align-items: flex-end;
}

.elementor-27 .elementor-element.elementor-element-bad50fe {
    margin-top: 0px;
    margin-bottom: 0px;
}

.elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-dbfee6c.elementor-column .elementor-widget-wrap {
    align-items: flex-end;
}

.elementor-27 .elementor-element.elementor-element-dbfee6c.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
    align-content: flex-end;
    align-items: flex-end;
}

.elementor-27 .elementor-element.elementor-element-dbfee6c > .elementor-element-populated {
    padding: 15px 15px 15px 15px;
}

.elementor-27 .elementor-element.elementor-element-2d98629 > .elementor-element-populated {
    padding: 15px 15px 15px 15px;
}

.elementor-27 .elementor-element.elementor-element-aec180b {
    margin-top: 0px;
    margin-bottom: 0px;
}

.elementor-27 .elementor-element.elementor-element-d32e3ca > .elementor-element-populated {
    padding: 15px 15px 15px 15px;
}

.elementor-27 .elementor-element.elementor-element-e464113 > .elementor-element-populated {
    padding: 15px 15px 15px 15px;
}

.elementor-27 .elementor-element.elementor-element-b83d384 {
    --display: flex;
    --background-transition: 0.3s;
}

.elementor-27 .elementor-element.elementor-element-33e48de {
    --divider-border-style: solid;
    --divider-color: #000;
    --divider-border-width: 1px;
}

.elementor-27 .elementor-element.elementor-element-33e48de .elementor-divider-separator {
    width: 100%;
}

.elementor-27 .elementor-element.elementor-element-33e48de .elementor-divider {
    padding-block-start:15px;padding-block-end:15px;}

.elementor-27 .elementor-element.elementor-element-1995830 > .elementor-container {
    max-width: 1170px;
}

.elementor-27 .elementor-element.elementor-element-c519895 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-1edc821 > .elementor-widget-container {
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-716b519 > .elementor-element-populated {
    padding: 0px 0px 0px 70px;
}

.elementor-27 .elementor-element.elementor-element-5aa11fc {
    text-align: left;
}

.elementor-27 .elementor-element.elementor-element-5aa11fc .elementor-heading-title {
    color: #818891;
    font-family: "DM Sans", sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    line-height: 20px;
    letter-spacing: 2.4px;
}

.elementor-27 .elementor-element.elementor-element-5aa11fc > .elementor-widget-container {
    margin: 0px 0px 0px 25px;
}

.elementor-27 .elementor-element.elementor-element-13c67d1 {
    --divider-border-style: solid;
    --divider-color: #818891;
    --divider-border-width: 2px;
}

.elementor-27 .elementor-element.elementor-element-13c67d1 .elementor-divider-separator {
    width: 15px;
    margin: 0 auto;
    margin-left: 0;
}

.elementor-27 .elementor-element.elementor-element-13c67d1 .elementor-divider {
    text-align: left;
    padding-block-start:24px;padding-block-end:15px;}

.elementor-27 .elementor-element.elementor-element-13c67d1 > .elementor-widget-container {
    margin: -46px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-a033860 {
    text-align: left;
    margin-top: 40px;
}

.elementor-27 .elementor-element.elementor-element-a033860 .elementor-heading-title {
    color: #191825;
    font-family: "DM Sans", sans-serif;
    font-size: 66px;
    font-weight: 700;
    line-height: 1.2em;
    letter-spacing: 0.02px;
}

.elementor-27 .elementor-element.elementor-element-a033860 > .elementor-widget-container {
    margin: -35px 0px 15px 0px;
}

.elementor-27 .elementor-element.elementor-element-ff41146 .elementor-icon-box-wrapper {
    text-align: left;
}

.elementor-27 .elementor-element.elementor-element-ff41146 {
    --icon-box-icon-margin: 20px;
}

.elementor-27 .elementor-element.elementor-element-ff41146.elementor-view-stacked .elementor-icon {
    background-color: #2FBAD1;
}

.elementor-27 .elementor-element.elementor-element-ff41146.elementor-view-framed .elementor-icon, .elementor-27 .elementor-element.elementor-element-ff41146.elementor-view-default .elementor-icon {
    fill: #2FBAD1;
    color: #2FBAD1;
    border-color: #2FBAD1;
}

.elementor-27 .elementor-element.elementor-element-ff41146 .elementor-icon {
    font-size: 60px;
}

.elementor-27 .elementor-element.elementor-element-ff41146 .elementor-icon-box-description {
    color: #191825;
    font-family: "DM Sans", sans-serif;
    font-size: 18px;
    font-weight: 500;
    line-height: 32px;
}

.elementor-27 .elementor-element.elementor-element-ff41146 > .elementor-widget-container {
    margin: 0px 100px 10px 0px;
}

.elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
    padding-bottom: calc(5px/2);
}

.elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
    margin-top: calc(5px/2);
}

.elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
    margin-right: calc(5px/2);
    margin-left: calc(5px/2);
}

.elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-items.elementor-inline-items {
    margin-right: calc(-5px/2);
    margin-left: calc(-5px/2);
}

body.rtl .elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
    left: calc(-5px/2);
}

body:not(.rtl) .elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
    right: calc(-5px/2);
}

.elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-icon i {
    color: #2FBAD1;
    transition: color 0.3s;
}

.elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-icon svg {
    fill: #2FBAD1;
    transition: fill 0.3s;
}

.elementor-27 .elementor-element.elementor-element-58a54b2 {
    --e-icon-list-icon-size: 14px;
    --icon-vertical-offset: 0px;
}

.elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-item > a {
    font-family: "DM Sans", sans-serif;
    font-size: 18px;
    font-weight: 500;
    line-height: 30px;
}

.elementor-27 .elementor-element.elementor-element-58a54b2 .elementor-icon-list-text {
    color: #191825;
    transition: color 0.3s;
}

.elementor-27 .elementor-element.elementor-element-ae80294 > .elementor-widget-container {
    margin: -15px 0px 0px 0px;
}

.elementor-27 .elementor-element.elementor-element-ae6796c {
    --display: flex;
    --background-transition: 0.3s;
}

.elementor-27 .elementor-element.elementor-element-3734652 {
    --divider-border-style: solid;
    --divider-color: #000;
    --divider-border-width: 1px;
}

.elementor-27 .elementor-element.elementor-element-3734652 .elementor-divider-separator {
    width: 100%;
}

.elementor-27 .elementor-element.elementor-element-3734652 .elementor-divider {
    padding-block-start:15px;padding-block-end:15px;}

.elementor-27 .elementor-element.elementor-element-13136a3 {
    --display: flex;
    --background-transition: 0.3s;
}

.elementor-27 .elementor-element.elementor-element-4d8f60c .slogan-area__bg {
    background-image: url("https://orgerly.info/wp-content/uploads/2022/06/bg.jpg");
}
.slogan-area__bg:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: "";
    background-color: #071422;
    opacity: 0.60;
    z-index: -1;
}
.elementor-widget:not(:last-child) {
    margin-block-end: 20px;
}
/*.elementor-divider-separator {
    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color);
}*/
.elementor-widget-divider .elementor-divider-separator {
    display: flex;
    margin: 0;
    direction: ltr;
}
.elementor-27 .elementor-element.elementor-element-13c67d1 .elementor-divider-separator {
    width: 15px;
    margin: 0 auto;
    margin-left: 0;
}
.elementor-widget:not(:last-child) {
    margin-bottom: 20px;
}
.elementor-widget-divider .elementor-divider {
    display: flex;
}
.elementor *, .elementor :after, .elementor :before {
    box-sizing: border-box;
}
.e-con.e-flex>.e-con-inner {
    flex-wrap: var(--flex-wrap);
    justify-content: var(--justify-content);
    align-items: var(--align-items);
    align-content: var(--align-content);
    flex-basis: auto;
    flex-grow: 1;
    flex-shrink: 1;
    align-self: auto;
}
.e-con>.e-con-inner {
    gap: var(--gap);
    width: 100%;
    max-width: var(--content-width);
    margin: 0 auto;
    padding-inline-start: 0;
    padding-inline-end: 0;
    height: 100%;
}
.e-con.e-con>.e-con-inner>.elementor-widget, .elementor.elementor .e-con>.elementor-widget {
    max-width: 100%;
}
.e-con>.e-con-inner>.elementor-widget>.elementor-widget-container, .e-con>.elementor-widget>.elementor-widget-container {
    height: 100%;
}
.slogan-area {
    position: relative;
    display: block;
    padding: 80px 0 90px;
    z-index: 10;
}
.slogan-area__bg {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-color: var(--thm-bg);
    background-blend-mode: luminosity;
    z-index: 0;
}
.slogan-area .shape {
    position: absolute;
    top: 0;
    right: 0px;
    bottom: 0;
    width: 100%;
    background-position: bottom right;
    background-repeat: no-repeat;
    background-size: auto;
    mix-blend-mode: color-dodge;
    z-index: 2;
}

.slogan-text-box {
    position: relative;
    display: block;
    z-index: 5;
    text-align: left;
}
.slogan-text-box h2 {
    color: #ffffff;
    font-size: 38px;
    line-height: 1.3em;
    font-weight: 700;
    letter-spacing: -0.04em;
}
.slogan-text-box h2 span {
    position: relative;
    display: inline-block;
    background-position: bottom center;
    background-repeat: no-repeat;
}
.slogan-btn-box {
    position: relative;
    display: block;
    line-height: 0;
    margin-top: 43px;
}
.btn-one, .fluentform .ff_btn_style {
    position: relative;
    display: inline-block;
    overflow: hidden;
    padding-top: 5px;
    padding-left: 30px;
    padding-bottom: 5px;
    padding-right: 30px;
    background-color: #0bc8ff;
    color: #ffffff;
    font-size: 12px;
    line-height: 40px;
    font-weight: 700;
    letter-spacing: normal;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    font-family: var(--thm-font);
    z-index: 1;
}
.btn-one .txt {
    position: relative;
    display: flex;
    align-items: center;
    z-index: 3;
}
.parallax-scene {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}
.slogan-area .shape {
    position: absolute;
    top: 0;
    right: 0px;
    bottom: 0;
    width: 100%;
    background-position: bottom right;
    background-repeat: no-repeat;
    background-size: auto;
    mix-blend-mode: color-dodge;
    z-index: 2;
}
.experience-box {
    position: absolute;
    top: 0;
    right: 0;
    width: 90px;
    height: 90px;
    background-color: #0bc8ff;
    border-radius: 50%;
    box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.experience-box:before {
    content: "";
    position: absolute;
    left: 0px;
    bottom: -2px;
    border-top: 15px solid #0bc8ff;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    transform: rotate(35deg);
}
.experience-box h2 {
    color: #ffffff;
    font-size: 20px;
    line-height: 34px;
}
.experience-box p {
    color: #ffffff;
    line-height: 17px;
    margin: 5px 0 0;
    font-size: 12px;
}

.btn-one:before, .fluentform .ff_btn_style::before {
    position: absolute;
    top: 0px;
    left: 0;
    bottom: 0px;
    width: 50%;
    content: "";
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    transition-duration: 800ms;
    background-color: var(--thm-black);
    z-index: 2;
}
.btn-one:after, .fluentform .ff_btn_style::after {
    position: absolute;
    top: 0px;
    right: 0;
    bottom: 0px;
    width: 50%;
    content: "";
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    transition-duration: 800ms;
    background-color: var(--thm-black);
    z-index: 2;
}
.elementor-element, .elementor-lightbox {
    --swiper-theme-color: #000;
    --swiper-navigation-size: 44px;
    --swiper-pagination-bullet-size: 6px;
    --swiper-pagination-bullet-horizontal-gap: 6px;
}
/*/frontend css */
.elementor-section {
    position: relative;
}
.elementor-element {
    --flex-direction: initial;
    --flex-wrap: initial;
    --justify-content: initial;
    --align-items: initial;
    --align-content: initial;
    --gap: initial;
    --flex-basis: initial;
    --flex-grow: initial;
    --flex-shrink: initial;
    --order: initial;
    --align-self: initial;
    flex-basis: var(--flex-basis);
    flex-grow: var(--flex-grow);
    flex-shrink: var(--flex-shrink);
    order: var(--order);
    align-self: var(--align-self);
}
.elementor .elementor-background-overlay, .elementor .elementor-background-slideshow {
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    position: absolute;
}
.elementor-section .elementor-container {
    display: flex;
    margin-right: auto;
    margin-left: auto;
    position: relative;
}
.elementor-element {
    --widgets-spacing: 20px 20px;
}
.elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
    display: flex;
}
.elementor-widget-wrap {
    position: relative;
    width: 100%;
    flex-wrap: wrap;
    align-content: flex-start;
}
.elementor-widget-wrap>.elementor-element {
    width: 100%;
}
.elementor-widget:not(:last-child) {
    margin-bottom: 20px;
}
.elementor-element .elementor-widget-container {
    transition: background .3s, border .3s, border-radius .3s, box-shadow .3s, transform var(--e-transform-transition-duration, .4s);
}
.elementor-widget-divider--view-line_icon .elementor-divider-separator:after, .elementor-widget-divider--view-line_icon .elementor-divider-separator:before, .elementor-widget-divider--view-line_text .elementor-divider-separator:after, .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
    display: block;
    content: "";
    border-block-end: 0;
    flex-grow: 1;
    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color);
}
.elementor-widget-divider--view-line_text .elementor-divider-separator:before
{
    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color);
    width: 15px;
}
.second_block .elementor-widget-divider--view-line_text .elementor-divider-separator:before
{
    border-block-start: var(--divider-border-width) var(--divider-border-style) #FF9E00;
    width: 15px;
}
.elementor-widget-divider--element-align-right .elementor-divider__element {
    margin-right: 0;
}
.elementor-widget-divider {
    --divider-border-style: none;
    --divider-border-width: 1px;
    --divider-color: #0c0d0e;
    --divider-icon-size: 20px;
    --divider-element-spacing: 10px;
    --divider-pattern-height: 24px;
    --divider-pattern-size: 20px;
    --divider-pattern-url: none;
    --divider-pattern-repeat: repeat-x;
}
.elementor-widget-divider--element-align-right .elementor-divider__element {
    margin-right: 0;
}
.elementor-widget-divider .elementor-divider__element {
    margin: 0 var(--divider-element-spacing);
    flex-shrink: 0;
}

.elementor-widget {
    position: relative;
}
.elementor-column {
    position: relative;
    min-height: 1px;
    display: flex;
}
.elementor-27 .elementor-element.elementor-element-0154243.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
    align-content: flex-end;
    align-items: flex-end;
/*    margin-bottom: -18px;*/
}
.single-service-style1 {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    min-height: 232px;
    z-index: 1;
}
.single-service-style1:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: #eff7f8;
    z-index: -1;
}
.single-service-style1 .shape-box {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 60px;
    height: 60px;
    z-index: 1;
    background-blend-mode: soft-light;
    mix-blend-mode: soft-light;
    border-bottom: 60px solid #ffffff;
    border-left: 60px solid transparent;
    -webkit-transform: perspective(400px) rotateX(-90deg) scaleY(1.0);
    -ms-transform: perspective(400px) rotateX(-90deg) scaleY(1.0);
    transform: perspective(400px) rotateX(-90deg) scaleY(1.0);
    -webkit-transform-origin: bottom;
    -ms-transform-origin: bottom;
    transform-origin: bottom;
    transition-delay: .1s;
    transition-timing-function: ease-in-out;
    transition-duration: .5s;
    transition-property: all;
}
.single-service-style1 .icon-holder {
    position: relative;
    display: block;
    padding-bottom: 12px;
}
[class^="icon-"], [class*=" icon-"] {
    font-family: 'icomoon' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.single-service-style1 .icon-holder span:before {
    position: relative;
    display: inline-block;
    color: #0bc8ff;
    font-size: 60px;
    line-height: 60px;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}
.icon-report:before {
    content: "\e903";
}
.icon-global:before {
    content: "\e904";
}
.icon-business:before {
    content: "\e905";
}
.icon-protection:before {
    content: "\e906";
}
.single-service-style1 .title-holder {
    position: relative;
    display: block;
}
.single-service-style1 .title-holder h3 {
    font-size: 20px;
    line-height: 26px;
    font-weight: 700;
}
.single-service-style1 .title-holder h3 a {
    color: #191825;
    transition: all 200ms linear;
    transition-delay: 0.3s;
}
.second_block .single-service-style1:after
{
    background: #FF9E00;
}
.second_block .elementor-element-7093125
{
        background: #262626;
    padding: 25px 15px 30px 15px;
}
.second_block .elementor-element.elementor-element-7093125 .elementor-heading-title
{
    font-size: 35px;
}
/*.second_block .elementor-divider-separator {
    border-block-start: var(--divider-border-width) var(--divider-border-style) #FF9E00;
}*/
.elementor-27 .elementor-element.elementor-element-13c67d1 .elementor-divider-separator
{
    border-block-start: var(--divider-border-width) var(--divider-border-style) #818891;
}
.single-service-style1:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: #0bc8ff;
    -webkit-transform: perspective(400px) rotateX(90deg) scaleY(0.5);
    -ms-transform: perspective(400px) rotateX(90deg) scaleY(0.5);
    transform: perspective(400px) rotateX(90deg) scaleY(0.5);
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    transition-delay: .1s;
    transition-timing-function: ease-in-out;
    transition-duration: .5s;
    transition-property: all;
    z-index: -1;
}
.single-service-style1:hover:after {
    -webkit-transform: perspective(400px) rotateX(0deg) scaleY(1.0);
    -ms-transform: perspective(400px) rotateX(0deg) scaleY(1.0);
    transform: perspective(400px) rotateX(0deg) scaleY(1.0);
    transition-delay: .1s;
    transition-timing-function: ease-in-out;
    transition-duration: .7s;
    transition-property: all;
}
.single-service-style1:hover .shape-box {
    -webkit-transform: perspective(400px) rotateX(0deg) scaleY(1.0);
    -ms-transform: perspective(400px) rotateX(0deg) scaleY(1.0);
    transform: perspective(400px) rotateX(0deg) scaleY(1.0);
    transition-delay: .6s;
    transition-timing-function: ease-in-out;
    transition-duration: .7s;
    transition-property: all;
}
.single-service-style1:hover .icon-holder span:before {
    color: #ffffff;
    transform: scale(1.1);
    transition: all 200ms linear;
    transition-delay: 0.3s;
}
.single-service-style1:hover .title-holder h3 a {
    color: #ffffff;
}
.single-service-style1 .title-holder h3 a:hover {
    color: #191825;
}
.elementor-27 .elementor-background-overlay, .elementor-27 .elementor-background-slideshow {
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    position: absolute;
}
.elementor-27 .elementor-background-overlay_2 {
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    position: absolute;
}
@media (min-width: 768px) {
    .elementor-widget-icon-box.elementor-vertical-align-top .elementor-icon-box-wrapper {
        align-items: flex-start;
    }
}
@media (min-width: 768px) {
    .elementor-column.elementor-col-50, .elementor-column[data-col="50"] {
        width: 50%;
    }
}
@media(min-width: 768px) {
    .elementor-27 .elementor-element.elementor-element-dae2779 {
        width:100%;
    }

    .elementor-27 .elementor-element.elementor-element-bae7a02 {
        width: 42%;
    }

    .elementor-27 .elementor-element.elementor-element-0154243 {
        width: 58%;
    }
    .second_block .elementor-element.elementor-element-0154243 {
        width: 58%;
    }
    .second_block .elementor-element.elementor-element-bae7a02 {
        width: 42%;
    }
    .elementor-27 .elementor-element.elementor-element-c519895 {
        width: 45%;
    }

    .elementor-27 .elementor-element.elementor-element-716b519 {
        width: 55%;
    }
}

@media(max-width: 1024px) and (min-width:768px) {
    .elementor-27 .elementor-element.elementor-element-bae7a02 {
        width:100%;
    }

    .elementor-27 .elementor-element.elementor-element-0154243 {
        width: 100%;
    }

    .elementor-27 .elementor-element.elementor-element-c519895 {
        width: 100%;
    }

    .elementor-27 .elementor-element.elementor-element-716b519 {
        width: 100%;
    }
}

@media(max-width: 1024px) {
    .elementor-27 .elementor-element.elementor-element-bf1f5d5 {
        padding:75px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-bae7a02 > .elementor-element-populated {
        padding: 0px 0px 0px 30px;
    }

    .elementor-27 .elementor-element.elementor-element-0154243 > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-27 .elementor-element.elementor-element-bad50fe {
        margin-top: 30px;
        margin-bottom: 0px;
        padding: 0px 10px 0px 10px;
    }

    .elementor-27 .elementor-element.elementor-element-aec180b {
        padding: 0px 10px 0px 10px;
    }

    .elementor-27 .elementor-element.elementor-element-1995830 > .elementor-container {
        max-width: 960px;
    }

    .elementor-27 .elementor-element.elementor-element-1edc821 > .elementor-widget-container {
        margin: 50px 0px 0px 0px;
        padding: 0px 90px 0px 90px;
    }

    .elementor-27 .elementor-element.elementor-element-716b519 > .elementor-element-populated {
        padding: 50px 0px 0px 0px;
    }
}
@media only screen and (max-width: 768px) {
    .elementor-section .elementor-container{display: block;}
    .elementor-27 .elementor-element.elementor-element-bf1f5d5 > .elementor-background-overlay{background-image: linear-gradient(90deg, #000000 100%, #FFFFFF 0%);}
    .elementor-27 .elementor-element.elementor-element-bf1f5d5{padding: 0px;}
    .elementor-background-overlay_2{background-image: linear-gradient(90deg, #ffffff 0%, #000000 0%);}
    .elementor-27 .elementor-element.elementor-element-bae7a02 > .elementor-element-populated{    margin: 20px 20px 20px 20px !important;}
    .slogan-text-box h2
    {
        font-size: 20px;
    }
    .slogan-btn-box
    {
        margin-top: 30px;
    }
    .experience-box p
    {
        line-height: 16px !important;
    }
    .elementor-27 .elementor-element.elementor-element-ff41146 .elementor-icon-box-description
    {
        font-size: 13px;
        line-height: 20px !important;
    }
    .listing
    {
        padding: 5px 0px 10px;
    }
    hr{
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .tailor_witness h3
    {
        font-size: 15px;
        margin-top: 15px;
    }
    .tailor_witness .button
    {
        font-size: 17px;
        padding: 4px 20px;
        margin-top: 5px;
    }
    .advance_support .button
    {
        padding: 4px 20px;
        font-size: 17px;
    }
    .advance_support h3
    {
        margin-top: 5px;
        font-size: 15px;
    }
    .need-some-assistance .btn-contact-us
    {
        font-size: 18px;
        padding: 4px 24px;
    }
    .btn-one
    {
        padding-top: 2px;
        padding-left: 10px;
        padding-bottom: 2px;
        padding-right: 10px;
    }
    .slogan-btn-box
    {
        margin-top: 20px;
    }
    .experience-box
    {
        width: 80px;
        height: 80px;
    }
}
@media(max-width: 767px) {
    /*.slogan-text-box h2
    {
        font-size: 28px;
    }
    .slogan-btn-box
    {
        margin-top: 34px;
    }
    .experience-box p
    {
        line-height: 16px !important;
    }
    .elementor-27 .elementor-element.elementor-element-ff41146 .elementor-icon-box-description
    {
        font-size: 16px;
    }
    .tailor_witness h3
    {
        font-size: 18px;
        margin-top: 15px;
    }
    .tailor_witness .button
    {
        font-size: 20px;
        padding: 4px 24px;
        margin-top: 5px;
    }
    .advance_support .button
    {
        padding: 4px 24px;
        font-size: 20px;
    }
    .advance_support h3
    {
        margin-top: 5px;
        font-size: 18px;
    }
    .need-some-assistance .btn-contact-us
    {
        font-size: 18px;
        padding: 4px 24px;
    }*/
    .elementor-27 .elementor-element.elementor-element-bae7a02 > .elementor-element-populated {
        padding:0px 15px 0px 15px;
    }

    .elementor-27 .elementor-element.elementor-element-6739719 > .elementor-element-populated {
        padding: 0px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-7093125 .elementor-heading-title {
        font-size: 35px;
    }

    .elementor-27 .elementor-element.elementor-element-0154243 > .elementor-element-populated {
        padding: 0px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-bad50fe {
        padding: 0px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-2d98629 > .elementor-element-populated {
        padding: 15px 15px 15px 15px;
    }

    .elementor-27 .elementor-element.elementor-element-d32e3ca > .elementor-element-populated {
        padding: 15px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-e464113 > .elementor-element-populated {
        padding: 30px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-1995830 {
        padding: 0px 15px 0px 15px;
    }

    .elementor-27 .elementor-element.elementor-element-c519895 > .elementor-element-populated {
        margin: 0px 0px 0px 0px;
        --e-column-margin-right: 0px;
        --e-column-margin-left: 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-1edc821 > .elementor-widget-container {
        margin: 40px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-716b519 > .elementor-element-populated {
        margin: 0px 0px 0px 0px;
        --e-column-margin-right: 0px;
        --e-column-margin-left: 0px;
        padding: 45px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-5aa11fc {
        text-align: left;
    }

    .elementor-27 .elementor-element.elementor-element-13c67d1 .elementor-divider {
        text-align: left;
    }

    .elementor-27 .elementor-element.elementor-element-13c67d1 .elementor-divider-separator {
        margin: 0 auto;
        margin-left: 0;
    }

    .elementor-27 .elementor-element.elementor-element-a033860 {
        text-align: left;
        margin-top: 40px;
    }

    .elementor-27 .elementor-element.elementor-element-a033860 .elementor-heading-title {
        font-size: 35px;
        line-height: 1.2em;
    }

    .elementor-27 .elementor-element.elementor-element-a033860 > .elementor-widget-container {
        margin: -30px 0px 0px 0px;
    }

    .elementor-27 .elementor-element.elementor-element-ff41146 > .elementor-widget-container {
        margin: 0px 0px 0px 0px;
    }
}

</style>
@endif
@endsection 
