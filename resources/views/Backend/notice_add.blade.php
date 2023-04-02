@extends('layouts.master')

@section('content')
<div class="ml-auto text-success">
    <p class="mx-5 my-2">Latest updated at: </p>
  </div>
<div class="row mx-5 my-5">
    
    @if(session('message'))
    <h4 class="alert alert-warning">{{ session('message')}}</h4>
    @endif


        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif
    <div class="x-panel">
        <div class="x-title">
            <h2 class="sub-title">Notice Page Content</h2>
            <div class="clearfix"></div>
        </div>

        <div class="x-content">
            <form action="{{ route('notice_store') }}" method="post" enctype="multipart/form-data">
                @csrf

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Title1:</label>
                <input type="text" name="notice1_title" @if($n_post) value="{{ $n_post->notice1_title }}" @endif  class="form-control">
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Content1</label>
                <textarea type="text" name="content1" class="form-control" row="3">@if($n_post) {{ $n_post->content1 }} @endif </textarea>
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Title2:</label>
                <input type="text" name="notice2_title" @if($n_post) value="{{ $n_post->notice2_title }}" @endif  class="form-control">
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Content2</label>
                <textarea type="text" name="content2" class="form-control" row="3">@if($n_post) {{ $n_post->content2 }} @endif </textarea>
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Title3:</label>
                <input type="text" name="notice3_title" @if($n_post) value="{{ $n_post->notice3_title }}" @endif  class="form-control">
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Content3</label>
                <textarea type="text" name="content3" class="form-control" row="3">@if($n_post) {{ $n_post->content3 }} @endif </textarea>
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Title4:</label>
                <input type="text" name="notice4_title" @if($n_post) value="{{ $n_post->notice4_title }}" @endif  class="form-control">
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Content4</label>
                <textarea type="text" name="content4" class="form-control" row="3">@if($n_post) {{ $n_post->content4 }} @endif </textarea>
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Title5:</label>
                <input type="text" name="notice5_title" @if($n_post) value="{{ $n_post->notice5_title }}" @endif  class="form-control">
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Content5</label>
                <textarea type="text" name="content5" class="form-control" row="3">@if($n_post) {{ $n_post->content5 }} @endif </textarea>
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Title6:</label>
                <input type="text" name="notice6_title" @if($n_post) value="{{ $n_post->notice6_title }}" @endif  class="form-control">
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Content6</label>
                <textarea type="text" name="content6" class="form-control" row="3">@if($n_post) {{ $n_post->content6 }} @endif </textarea>
            </div><br>

            
            <Button type="Submit" name="save" class="btn btn-primary btn-md">Save</Button>
        </form>
        </div>
    </div>

</div>

@endsection