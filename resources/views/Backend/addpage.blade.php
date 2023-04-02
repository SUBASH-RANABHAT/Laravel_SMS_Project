@extends('layouts.master')

@section('content')
<div class="ml-auto text-success">
    <p class="mx-5 my-2">Latest updated at: {{ $b_post->updated_at }}</p>
  </div>
<div class="row mx-5 my-5">
    
    @if(session('message'))
    <h4 class="alert alert-warning">{{ session('message')}}: {{ $b_post->updated_at }}</h4>
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
            <h2 class="sub-title">Home Page Content</h2>
            <div class="clearfix"></div>
        </div>

        <div class="x-content">
            <form action="{{ route('blog_store') }}" method="post" enctype="multipart/form-data">
                @csrf

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Title:</label>
                <input type="text" name="page_title" @if($b_post) value="{{ $b_post->page_title }}" @endif  class="form-control">
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Slogan</label>
                <input type="text" name="slogan"  @if($b_post) value="{{ $b_post->slogan }}" @endif class="form-control"><br>
            </div><br>


            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Content:</label>
                <textarea type="text" name="content" class="form-control">@if($b_post){{$b_post->content}}@endif</textarea>
            </div><br>


            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Banner Image:</label>
                <input type="file" name="image" class="form-control"/>
                @if($b_post)
                <img src="{{ asset('uploads/blog_post/'.$b_post->image) }}" width="70px" height="70px" alt="logo">
                @endif
            </div><br>
            
            <Button type="Submit" name="save" class="btn btn-primary btn-md">Save</Button>
        </form>
        </div>
    </div>

</div>

@endsection