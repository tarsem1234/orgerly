@extends('backend.layouts.app')

@if( isset($categorySession) )
@section ('title', ('Edit Review Template'))
@else
@section ('title', ('Create Review Template'))
@endif

@section('after-styles')
<link type="text/css" rel="stylesheet" href="{{ asset("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}" media="all">
@endsection


@section('page-header')
@if( isset($categorySession) )
<h1>Edit Review Template</h1>
@else

<h1>Create Review Template
</h1>
@endif
@endsection


@section('content')
<section id="add_edit_session" v-cloak>
    <section v-if='successbox.show'>
        <div class="box box-success" id="">
            <div class="box-header with-border"></div>
            <div class="box-body">
                <div class="container text-center col-md-12">
                    <div class="alert alert-success"><strong>Success: </strong> @{{successbox.message}}</div>
                    <a href="{{route('admin.review-template.index')}}">Back to Template listing</a>
                </div>
            </div>
    </section>
    <section v-else>
        <div class="box box-success">
            <div class="box-header with-border">
                @if( isset($categorySession) )
                    <h3 class="box-title">Edit Review Template</h3>
                @else
                    <h3 class="box-title">Create Review Template</h3>
                @endif
                <div class="box-tools pull-right">

                </div>
            </div>

            <div class="box-body">
                <div class="container">
                     @if( isset($categorySession) )
                    {{ html()->modelForm($categorySession, 'PUT', route('admin.review-template.update', $categorySession['id']))->class('form-horizontal')->acceptsFiles()->open() }}
                    @else
                    {{ html()->form('POST', route('admin.review-template.store'))->class('form-horizontal')->acceptsFiles()->open() }}
                    @endif
                    
                </div>
                <div v-if="errors.length" class="text-danger error-list">
                    <b>Please correct the following error(s):</b>
                    <ul>
                        <li v-for="error in errors" v-html='error'></li>
                    </ul>
                </div>
                @if(isset($categorySession))
                {{ html()->hidden('category_id', $categorySession->id) }}
                @endif
                <div class="row form-group">
                    <div class="col-sm-12">
                        {{ html()->label('Template Title:', 'title') }}
                    </div>
                    <div class="col-sm-12">
                        {{ html()->text('title')->class('form-control title-input')->maxlength('191')->placeholder('Template Title')->attribute('v-model', 'session.title') }}
                    </div>
                </div>
                
                <div class="row form-group">
                    <!-- <div class="col-sm-1">
                        {{ html()->label('Questions:', 'questions') }}
                    </div> -->
                    <div class="col-sm-12">
                        <table class="col-sm-12 table table-bordered" id="main_table" border="1" cellpadding="5">
                            <thead>
                                <tr>
                                    <td>#.</td>
                                    <td>Title</td>
                                    
                                    <td>Line Record</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(question, index) in session.template_option" v-bind:key="index">
                                    <td>@{{index+1}}</td>
                                    <td>
                                        <input name="questions[0][question]" required="true" v-model="question.title" class="form-control">
                                    </td>
                                    
                                    <td class="answer_option">
                                        <div class="more_answer_option">
                                            <p v-for="(option, optionIndex) in question.options">
                                                <input v-model="option.line_record" type="text" required="true" class="form-control">
                                                
                                                <button type="button" class="btn btn-danger delete_option" title="delete" @click="addRemoveOptions(question, optionIndex)"><i class=" fa fa-trash-o"></i></button>
                                            </p>
                                        </div>
                                        <button type="button" class="btn btn-info add_more_options" title="addoption" @click="addRemoveOptions(question, -1)">Add More Options</button>
                                    </td>
                                    <td><button type="button" class="btn btn-danger delete_question" title="delete" @click="addRemoveQuestions(index)">Delete</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4"><button type="button" class="btn btn-info add_more_questions" title="add" @click="addRemoveQuestions(-1)">Add More </button></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="box box-info  create-edit-cancel-btn">
            {{ html()->button('Save', 'button')->class('btn btn-primary edit-create-btn')->attribute('@click', 'checkForm()') }}
            <a href="{{route("admin.review-template.index")}}" class="btn btn-primary cancel-btn">Cancel</a>
        </div>
        {{ html()->closeModelForm() }}
    </section>
</section>
<style>
    [v-cloak] > * { display:none }
    [v-cloak]::before { content: "loading…" }
    .table > tbody > tr > td {
        vertical-align: middle;
    }
</style>
@endsection

@section('after-scripts')
<?php
$emptyOption = [0 => ['line_record' => '']];
$emptyQuestions = [0 => ['title' => '', 'options' => $emptyOption]];
$emptySession = [
    "title" => '',
    "template_option" => $emptyQuestions
];
?>

<script>
    
    var errorList = 0;
    var save_session_route = "{{route('admin.review-template.store')}}";
    new Vue({
        el: '#add_edit_session',
        data: {
            errors: [], saveClick: false, save_session_route: save_session_route, successbox: {show: false, message: ''},
            session: @json($categorySession ?? $emptySession)
        },
        methods: {
            addRemoveQuestions(index) {
                if (index === -1) {
                    this.session.template_option.push(@json($emptyQuestions[0]))
                } else {
                    if (this.session.template_option.length > 1)
                        this.session.template_option.splice(index, 1);
                }
            },
            addRemoveOptions(question, index) {
                if (index === -1) {
                    question.options.push(@json($emptyOption[0]))
                } else {
                    if (question.options.length > 1)
                        question.options.splice(index, 1);
                }
            },
            resetCorrectAnswers(question) {
                for (var i = 0; i < question.options.length; i++) {
                    question.options[i].correct_answer = 0;
                }
            },
            markCorrectAnswer(question, option) {
                if (question.type == "{!! config('constant.inverse_session_question_type.Radio') !!}") {
                    this.resetCorrectAnswers(question);
                    option.value = 1;
                    option.correct_answer = 1;
                }
            },
            scrollTop(val = 100) {
                $('html, body').animate({
                    scrollTop: $(".box-body").offset().top - val
                }, 500);
            },
            checkForm() {
                
                this.errors = [];
                // if (!this.session.title)
                //     this.errors.push('Template Title is required');
                
                // questions = this.session.template_option;
                // var questionIndex = 1;
                // for (var i = 0; i < questions.length; i++) {
                //     var errorText = '';
                //     if (!questions[i].title)
                //         errorText += "<li>Title is empty</li>";
                //     var optionErrors = 0;
                //     var selectedAnswer = 0;
                //     for (var o in questions[i].options) {
                //         if (!questions[i].options[o].line_record)
                //             optionErrors++;
                //     }
                //     if (optionErrors > 0) {
                //         var text = optionErrors == 1 ? "1 Line Record is " : optionErrors + " Line Record are";
                //         errorText += "<li>" + text + " empty</li>";
                //     }
                //     if (errorText != '')
                //         this.errors.push("Option " + (questionIndex) + " has following problems: <ul>" + errorText + '</ul>');
                //     questionIndex++;
                // }
                if (this.errors.length > 0) {
                    this.scrollTop();
                } else {
                    var vr = this;
                    axios.post(this.save_session_route, this.session).then(function (response) {
                        data = response.data;
                        if (data.status != true) {
                            vr.errors.push(data.message);
                        } else {
                            vr.successbox.show = true;
                            vr.successbox.message = data.message;
                        }
                        vr.scrollTop(300);
                    }).catch(error => {
                        
                        if(error.response.data.errors)
                        {
                            vr.errors.push(error.response.data.errors);
                        }
                        vr.errors.push(error.response.statusText);
                        vr.scrollTop(300);
                    });
                }
            },
        }
    });
</script>
@endsection
