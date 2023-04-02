@extends('layouts.master')

@section('content')
    <div class="ml-auto text-success">
      <p class="mx-5 my-2">Latest updated at: {{ $a_post->updated_at }}</p>
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
            <h2 class="sub-title">About Page Content</h2>
            <div class="clearfix"></div>
        </div>

        <div class="x-content">
            <form action="{{ route('about_store') }}" method="post" enctype="multipart/form-data">
                @csrf

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">About Title:</label>
                <input type="text" name="about_title" @if($a_post) value="{{ $a_post->about_title }}" @endif  class="form-control">
            </div><br>

            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">Content:</label>
                <textarea type="text" name="content" class="form-control">@if($a_post){{$a_post->content}}@endif</textarea>
            </div><br>


            <div class="form-group has-feedback" style="position: relative;">
                <label for="name" class="hws_form_label">About Image:</label>
                <input type="file" name="image"  class="form-control">
                @if($a_post) 
                
                @endif 
            </div><br>
            
            <Button type="Submit" name="save" class="btn btn-primary btn-md">Save</Button>
        </form>
        </div>
    </div>

</div>

@endsection