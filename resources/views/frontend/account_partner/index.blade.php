@extends ('frontend.layouts.app')
@section ('title', ('Accountability Partner'))
@section('after-styles')
<link type="text/css" rel="stylesheet" href="{{ asset(mix('css/dashboard.css')) }}" media="all">
<style>#account_partner{ font-weight: bold;color: #000;}</style>
@endsection 
@section('content')
<div class="forum-page signer-page dashboard-page associates profile-view">    
    <div class="container">
        <div class="row content">
            @include('frontend.includes.sidebar')
            <div class="col-md-9 col-sm-8">
                <div class="right-dashboard-div">
                    <div class="profile right-dashboard-div-text">
                        <div class="row">  
                            <div class="col-md-12">
                                <h4 class="pull-left">My Accountability Partner</h4>                          
                                <a href="{{ route('frontend.account_partner.create') }}"><button id="addlisting-btn"> Add New Accountability Partner </button></a>
                            </div>
                        </div>
                        <div class="">
                                        <?php if ($partners && count($partners)>0) { ?>
                            <div class="table-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>Signer Name</th>
                                            <th>Signer Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partners as $key => $sign)
                                            <tr data-id="{{$sign->id}}">
                                                <td>{{ $sign->name }}</td>
                                                <td class="blue-text">{{$sign->email}}</td>
                                                <td>
                                                    
                                                    <a href="{{route('frontend.account_partner.view',$sign->id)}}" type="button" class="btn btn-info btn-lg icon-btn" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    
                                                    <span type="button" class="btn btn-info btn-lg icon-btn  delete-icon" data-toggle="modal" data-target="#confirm-delete-{{$sign->id}}" title="Delete"><i class="fa fa-trash-o"></i> </span>
                                                        <!-- Modal -->
                                                    <div class="modal fade" id="myModal-{{$sign->id}}" role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <p>Are you sure you want to re-send the activation email to signer?</p>
                                                                </div>
                                                                <div class="text-center btns-green-blue small-buttons">
                                                                    <a href="" type="button" class="btn btn-green">Confirm</a>
                                                                    <button type="button" class="button btn btn-blue" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="confirm-delete-{{$sign->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="err" id="add_err"></div>
                                                                        <div class="col-md-12 col-sm-12" id="favdiv">
                                                                            <div id="usersignip-form">
                                                                                <div class="form-group">
                                                                                    <div class="text-center btns-green-blue">
                                                                                        <p>Are you sure you want to delete this partner from your list?</p>
                                                                                        <a href="{{ route('frontend.delete.account_partner',$sign->id) }}" class="btn btn-green">Confirm</a>
                                                                                        <a href="" class="btn btn-blue" data-dismiss="modal">Cancel</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                       @endforeach
                                        
                                    </tbody>
                                </table><!--table-->
                            </div><!-- table-responsive -->
                            <?php } else { ?>
                            <h3>No record found.</h3>
                                        <?php } ?>
                        </div>
                                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection