@extends ('frontend.layouts.app')
@section ('title', ('About Us'))
@section('after-styles')
<link type="text/css" rel="stylesheet" href="{{ asset(mix('css/about-us.css')) }}" media="all">
@endsection 
@section('content') 
<div class="contact-page about-style"> 
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="contact-banner">
                        <div class="text">About Us</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        @include('frontend.common-home-icon.common_home_icon')
    </div>  
    <div class="about-freezylist-div">
        <div class="container">
            <div class="col-sm-12">
                <h2>About Orgerly Benefits</h2>
                <h4>At Orgerly, our passion is creating solutions that promote our values beyond our
                    organization!
                </h4>
                <div class="about-freezylist-para-div container">
                    <div class="col-sm-12 subdiv-freezylist-para">
                        <p>Our value proposition is derived from the foundation of <span>“ORG” (Org-erly)</span>, which is 
                            is a complete focus on our customers and aligning to your goals.
                        </p>
                        <p>In alignment to this ideology, we provide our members solutions for <span>Employee Benefits,
                                Education</span> and <span>Wellness Programs</span>.
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    </div>


    @endsection