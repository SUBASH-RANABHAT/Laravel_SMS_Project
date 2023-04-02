@extends('layouts.master')

@section('content')
    <div class="card">
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
      <div class="card-body">
      <form action="{{ route('schedule_post') }}" method="POST"  enctype="multipart/form-data">
        @csrf<!-- {{ csrf_field() }} -->
        <table class="table">
          <thead>
              <tr>
                  <th>Teacher Name</th>
                  <th>Class</th>
                  <th>Subject</th>
                  <th>Day</th>
                  <th>Start Time</th>
                  <th>End Time</th>
              </tr>
                </thead>
                <tbody>
            <tr>
                <td>
                  {{-- @foreach($names as $key=>$name)
                  @dd($key)
                  @endforeach --}}
                {{-- @dd($names) --}}
        <select name="name">
          @foreach($names as $key=>$name)
              <option value="{{ $key }}">{{ $name }}</option>
          @endforeach
        </select>
      </td>


      <td>
      <select name="class">
        @foreach($class_no as $key=>$class)
            <option value="{{ $key }}">{{ $class }}</option>
        @endforeach
      </select>
    </td>

    
        {{-- <td><select id="class" name="teacher_class">
            <option value="class1">Class 1</option>
            <option value="class2">Class 2</option>
            <option value="class2">Class 3</option>
            <option value="class2">Class 4</option>
            <option value="class2">Class 5</option>
          </select></td> --}}
          
        <td><input type="text" name="subject"/></td>
        <td><select id="Day" name="day">
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
          </select></td>
        <td><input type="datetime-local" name="start_time"/></td>
        <td><input type="datetime-local" name="end_time"/></td>
    </tr>
                </tbody>
        <button type="submit" class="btn btn-primary">Save</button>

        </table>
      </form>
      </div>
    </div>
    @endsection


    