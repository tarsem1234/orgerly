@extends ('backend.layouts.app')

@section ('title', ('Review Template'))

@section('after-styles')   
<link type="text/css" rel="stylesheet" href="{{ asset("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}" media="all">
@endsection

@section('page-header')
<h1>Review Template</h1> 
@endsection

@section('content')
<div id="del-success-msg" class="alert alert-success"></div>
<div class="box box-success" id="blog-index">
    <div class="box-header with-border"> 
        <h3 class="box-title">All Review Template</h3>
        
        <div class="box-tools pull-right">
            <a href="{{route('admin.review-template.create')}}" class="btn btn-primary btn-xs">Add Review Template</a>
        </div>  
    </div>
    <div class="box-body">
        <div class="table-responsive">  
            <table id="blog-table" class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Template Title</th>
                        
                        <th>Creation Date</th>
                        <th width="10%" class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($templates as $index=>$blog)
                    <tr>           
                        <td>{{ $index+1 }}</td>
                        
                        <td>{{ $blog->title }}</td>
                        <td class="detail-max">{{ date("m/d/Y",strtotime($blog->created_at)) }}</td>
                        <td>
                            <a href="{{route('admin.review-template.edit',$blog->id) }}" class="btn btn-xs btn-info edit-icon-btn">
                                <i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="top" data-original-title="Edit"></i>
                            </a>
                            <a data-id='{{ $blog->id }}' class="btn btn-xs btn-info deactivate-icon-btn button-approved copy-icon-btn">
                                <i class="fa fa-copy" data-toggle="tooltip" data-placement="top" data-original-title="Copy"></i>
                            </a>
                            <a data-id='{{ $blog->id }}' class="btn btn-xs btn-danger delete-icon-btn">
                                <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" data-original-title="Delete"></i>
                            </a>
                            
                            
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>  
</div>

@endsection

@section('after-scripts')
<script src="{{ asset("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}"></script>
<script src="{{ asset("js/backend/plugin/datatables/dataTables-extend.js") }}"></script>

<script>
    $(function () {
        var blogTable = $('#blog-table').DataTable({
            dom: 'lfrtip',
            processing: false,
            autoWidth: false,
            language: {
                search: "",
                searchPlaceholder: "Search"
            }
        });

        setTimeout(function () {
            $('.alert-success').fadeOut('fast');
        }, 3000);
        $(".actions").removeClass("sorting");

        $(document).on('click', '.delete-icon-btn', function () {
            var blogId = $(this).attr("data-id");
            deleteBlog(blogId, $(this));

        });
        $(document).on('click', '.copy-icon-btn', function () {
            var blogId = $(this).attr("data-id");
            copyBlog(blogId, $(this));

        });
        function  copyBlog(blogId, $this) {
            swal({
                title: '',
                text: "Are you sure want to copy this template?",
                type: "warning",
                closeModal: true,
                showLoaderOnConfirm: false,
                className: "btn-danger",
                confirmButtonText: "Yes, copy it!",
                showCancelButton: true,
                confirmButtonColor: "#ec6c62"
            },
                    function () {
                        $.ajax({
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                _method: 'POST'
                            },
                            url: "{{url('/admin/copy-template/')}}" + "/" + blogId,
                            success: function (data) {
                                var msg = '<span>' + data.message + '</span>';
                                $('#del-success-msg').html(msg);
                                $("#del-success-msg").show();
                                blogTable.row($this.parents('tr')).remove().draw();
                                window.location.reload();
                            },
                            error: function (data) {
                                swal("Oops", "We couldn't connect to the server!", "error");
                            }
                        });
                        setTimeout(function () {
                            $('.alert-success').fadeOut('fast');
                        }, 3000);
                    });
        }
        function  deleteBlog(blogId, $this) {
            swal({
                title: '',
                text: "Are you sure that you want to delete this?",
                type: "warning",
                closeModal: true,
                showLoaderOnConfirm: false,
                className: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                showCancelButton: true,
                confirmButtonColor: "#ec6c62"
            },
                    function () {
                        $.ajax({
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                _method: 'DELETE'
                            },
                            url: "{{url('/admin/review-template/')}}" + "/" + blogId,
                            success: function (data) {
                                var msg = '<span>' + data.message + '</span>';
                                $('#del-success-msg').html(msg);
                                $("#del-success-msg").show();
                                blogTable.row($this.parents('tr')).remove().draw();
                                window.location.reload();
                            },
                            error: function (data) {
                                swal("Oops", "We couldn't connect to the server!", "error");
                            }
                        });
                        setTimeout(function () {
                            $('.alert-success').fadeOut('fast');
                        }, 3000);
                    });
        }

    });


</script>
@endsection 
