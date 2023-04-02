@extends('layouts.master')

@section('content')
<div class="card mx-5 my-5">
    <div class="card-body">
    <h2 class="text-center">Update Form</h2>
    <form action="{{url('student/update/'.$student->id)}}" method="post" enctype="multipart/form-data">
      @csrf
        @method('PUT')
        <input type="hidden" class="form-control" name="userid" value="{{ $student['id'] }}/>

      <div class="form-group">
        <label for="name">Name:</label>
        <div class="col-sm-12">
        <input type="text" class="form-control" name="name" value="{{ $student['name'] }}"/>
        </div>
        <span class="text-danger">@error('name'){{$message}}@enderror</span>
      </div>
      <div class="form-group">
        <label for="email">Email address:</label>
        <div class="col-sm-12">
        <input type="email" class="form-control" name="email" value="{{ $student['email'] }}"/></div>
        <span class="text-danger">@error('email'){{$message}}@enderror</span>
      </div>
      <div class="form-group">
        <label for="email">Roll No:</label>
        <div class="col-sm-12">
        <input type="text" class="form-control" name="roll_no" value="{{ $student['roll_no'] }}"/></div>
        <span class="text-danger">@error('email'){{$message}}@enderror</span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>   
        <div class="col-sm-12">
        <input type="password" class="form-control" name="password" value="{{ $student['password'] }}"/></div>
        <span class="text-danger">@error('password'){{$message}}@enderror</span>
      </div>
      <div class="form-group">
        <label for="name" class="hws_form_label">Image:</label>
        <input type="file" name="image" class="form-control"/>
        @if($student)
        {{-- <img src="{{ asset(storage_path() . '/app/student' . $student->image) }}"> --}}
        @endif
    </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="agreement">
        <div class="col-sm-12">
        <label class="form-check-label" for="agreement">I agree to the terms and conditions</label></div>
        <span class="text-danger">@error('agreement'){{$message}}@enderror</span>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
  </div>
@endsection

