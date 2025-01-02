@extends ('frontend.layouts.app')
@section ('title', ('Accountability Partner Create'))
@section('after-styles')
<link type="text/css" rel="stylesheet" href="{{ asset(mix('css/dashboard.css')) }}" media="all">
@endsection 
@section('content')
<style>
    .select2-container {
	width: 100% !important;
    }
</style>
<style>#account_partner{ font-weight: bold;color: #000;}</style>
<div class="login-page password signer-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default1">
                    <div class="panel-heading"><span class="black-text">Add </span>Accountability Partner</div>
                    <div class="">
                        {{ html()->form('POST', route('frontend.account_partner.store'))->class('form-horizontal')->open() }}
			<div id="usersignup-form">
                @if($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif
			    <div class="form-group">
				<div class="col-sm-12">
				    <h4 class="control-label">Name</h4>
				    <input type="text" class="form-control" data-rule-required="true" placeholder="Please enter the name" data-rule-minlength="2" id="signer_name" name="name" aria-required="true" required>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12">
				    <h4 class="control-label">Email</h4>
				    <input type="text" class="form-control" placeholder="Please enter email" id="email" name="email" aria-required="true" required>
				    <div id="emailInfo" align="left"></div>
				</div>
			    </div>
			</div>

			


			<div class="small-buttons mr-top">
			    <div class="btns-green-blue text-center margin-bottom"> 
				<input type="submit" class="button btn btn-blue" name="submit" value="Submit">
				<input type="reset" class="button btn btn-green m-left" value="Reset">
				<a href="{{ route('frontend.account_partner.index') }}" type="button" class="btn btn-blue btn-cancel button">Cancel</a>
			    </div>
			</div>
                        {{ html()->form()->close() }}

                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection
@section('after-scripts')

<script>
$(document).ready(function () {
    $('form').validate({
        rules: {
            email: {
                email: true
            }
        },
        messages: {
            email: {
                email: "Plese enter correct email id"
            }
        }
    });
    
    $('.reset').on('click', function (e) {
        e.preventDefault();
        $('form')[0].reset();
    });

    $(document).ready(function(){
    // google.maps.event.addDomListener(window, 'load', function () {
        

    });
});
</script>
@endsection
