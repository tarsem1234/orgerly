@extends('backend.layouts.app')

@if( isset($company) )
@section ('title', ('Edit Company'))
@else
@section ('title', ('Create Company'))
@endif

@section('after-styles')
<link type="text/css" rel="stylesheet" href="{{ asset("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}" media="all">
@endsection

@section('page-header')
<h1>Company Management</h1>    
@endsection

@section('content')
<div class="box box-success" id="edit-add-pages">
   <div class="box-header with-border"> 
      @if( isset($company) )
      <h3 class="box-title">Edit Company</h3>
      @else
      <h3 class="box-title">Create Company</h3>
      @endif


      @if ($errors->any())
          <div class="alert">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li style="color:red;">{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <div class="box-tools pull-right">

      </div>  
   </div>
   <div class="box-body">
      <div class="container">

         @if( isset($company) )
         {{ html()->form('PUT', route('admin.companies.update', $company['id']))->class('form-horizontal')->acceptsFiles()->open() }}
         @else
         {{ html()->form('POST', route('admin.companies.store'))->class('form-horizontal')->acceptsFiles()->open() }}
         @endif
         <div class="row form-group">
            <div class="col-sm-2">
               @if( isset($company) )
               {{ html()->label('Company Name:', 'Company') }}
               @else
               {{ html()->label('Company Name:', 'Company') }}
               @endif
            </div>
            <div class="col-sm-5">
               {{ html()->text('company', isset($company) ? $company['name'] : null)->class('form-control title-input')->required()->maxlength('191')->placeholder('Company Name') }}
               @if(count($errors->get('Company')) > 0)
               <span class="backend-errors alert-danger">{{ $errors->first('Company') }}</span>
               @endif
            </div>
         </div>             
      </div>
   </div>    
</div>
<div class="box box-info  create-edit-cancel-btn">
   @if( isset($company) )
   {{ html()->submit('Update')->class('btn btn-primary edit-create-btn') }}
   @else
   {{ html()->submit('Create')->class('btn btn-primary edit-create-btn') }}
   @endif
   <a href="{{route("admin.companies.index")}}" class="btn btn-primary cancel-btn">Cancel</a>
</div>
{{ html()->form()->close() }}    

@endsection

@section('after-scripts')

<script>

</script>
@endsection


