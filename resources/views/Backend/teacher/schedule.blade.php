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
        @csrf
      <h2 class="text-center">Teacher Schedule</h2><br>
       <table class="table table-bordered" id="table">
        <tr>
            <th>Teacher Name</th>
            <th>Class</th>
            <th>Subject</th>
            <th>Day</th>
            <th>Start_Time</th>
            <th>End_Time</th>
        </tr>
        <tr>
            <td><input type="text" name="name"/></td>
            <td><select id="class" class="class">
                <option value="class1">Class 1</option>
                <option value="class2">Class 2</option>
                <option value="class2">Class 3</option>
                <option value="class2">Class 4</option>
                <option value="class2">Class 5</option>
              </select></td>
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
            <td><input type="text" name="start_time"/></td>
            <td><input type="text" name="end_time"/></td>
        </tr>
       </table>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
    </div>

    @endsection