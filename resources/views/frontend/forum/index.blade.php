@extends('frontend.layouts.app')
@section ('title', ('Forum'))
@section('after-styles')
<link type="text/css" rel="stylesheet" href="{{ asset(mix('css/forum.css')) }}" media="all">
@endsection 
@section('content')
<div class="contact-page forum-page">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="contact-banner">
                        <div class="text">Member Forum</div>
                    </div><!--content-banner-->
                </div>
            </div><!--coi-12-->
        </div><!--row-->
    </div><!--content-wrapper-->

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="black-div">
                        <a href="{{ route('frontend.terms') }}"><div class="blue-div">See terms & conditions</div></a>
                    </div><!--black-div-->
                </div>
            </div><!-- col-md-12 -->
        </div><!-- row -->
    </div><!--content-wrapper-->
    <div class="content-wrapper">
        <div class="container">
            <div id="form_text_main"  class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="col-lg-12 text-center">
                            <a href="{{route('frontend.reply.create')}}"class="btn btn-primary input-btn">Create New Topic</a>
                        </div>
                    </div>
                    <?php if ($forums->count()) { ?>
                        <div class="col-lg-12">
                            <div class="table-responsive"> 
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Topic</th>
                                        <th>Views</th>
                                        <th>replies</th>
                                        <th>Date / Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($forums as $index=>$forum)
                                        <tr>
                                        <td>{{$index+1}}</td>
                                        <td class="blue-text">
                                            <a href="{{route('frontend.forumReplies.show',$forum->id)}}">{{ $forum->topic }}</a>
                                        </td>
                                        <td>{{isset($forum->totalViews[0]) ? $forum->totalViews[0]->total:0}}</td>
                                        <td><?php
                                            if ($forum->replies->count()) {
                                                echo count($forum->replies);
                                            } else {
                                                echo "0";
                                            }
                                            ?></td>
                                        <td>{{date("d F Y", strtotime($forum->created_at))}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table><!--table-->
                            </div>
                            <div class="text-center" id="forum-pagination">
                                {{ $forums->links() }}<!--pagination-->
                            </div>
                        </div><!-- col-md-12 -->
                    <?php } else { ?>
                        <h3 class="no-data">No forum found.</h3>
                    <?php } ?>
                </div><!-- row -->
            </div><!-- container -->
        </div>
    </div><!--content-wrapper-->
</div><!--forum-page-->
@endsection
