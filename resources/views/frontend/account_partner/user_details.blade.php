@extends('frontend.layouts.app')
@section('title', app_name() . ' | Profile')
<link type="text/css" rel="stylesheet" href="{{ asset(mix('css/dashboard.css')) }}" media="all">
<style>#account_partner{ font-weight: bold;color: #000;}</style>
@section('content')
<div class="dashboard-page profile-view">    
    <div class="container">
        <div class="row content">
            @include('frontend.includes.sidebar')
            <div class="col-md-9 col-sm-8">
                <div class="right-dashboard-div">
                    <div class="profile right-dashboard-div-text">
                        <div class="profile-sidebar">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                @if($user->image)
                                <img src="{{asset('storage/profile_images/'.$user->id.'/'. $user->image)}}" style="height: 100%; width: 100%" class='img-responsive'alt="profile photo" class="preview">
                                @else
                                <img src="{{asset('storage/site-images/no_image_available.jpg')}}" style="height: 100%; width: 100%" class='img-responsive' alt="profile photo" class="preview">
                                @endif
                            </div>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name">
                                    {{$user->name}}
                                </div>
                            </div>
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li>
                                        <p>
                                            <span><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                           
                                            {{$user->name}}
                                            
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                            {{$user->email}}
                                        </p>
                                    </li>

                                    <li>
                                        <p>
                                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            @if($user->phone_no){{$user->phone_no}} @else NA @endif
                                        </p>
                                    </li>

                                    

                                    

                                </ul>
                            </div>
                            <!-- END MENU -->
                            <div class="profile-userbuttons text-center">
                                <a href="{{route('frontend.account_partner.index')}}" type="button" class="btn btn-default">Back</a>
                            </div>
                        </div><!--profile-sidebar-->   
                    </div>
                </div>
            </div><!--right-dashboard-div-->
        </div><!--col-9-->
    </div><!--row-->
</div><!--container-->
</div><!--dashboard-->
@endsection

@section('after-scripts')
<script>
</script>
@endsection
