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

          <b>
      <div class="card-body">
      <form action="{{ route('calendar.event_store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
      <h2 class="text-center">Add Event to Calendar</h2><br>
       <table class="table table-bordered" id="table">
        <button type="button" name="add" id="add" class="btn btn-success">+</button>
        <tr>
            <th>Event Name</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Action</th>

        </tr>
        <tr>
            <td><input type="text" name="inputs[0][title]" placeholder="Enter Event Title "/></td>
            <td><input type="datetime-local" name="inputs[0][start_date]"/></td>
            <td><input type="datetime-local" name="inputs[0][end_date]"/></td>

        </tr>
       </table>
       <Button type="Submit" name="save" class="btn btn-primary btn-md">Save</Button>
      </form>
    </div>
    </div>

    <script>
        var i = 1;
        $('#add').click(function(){
          if(i < 5){
            i++;
            $('#table').append(
              `<tr>
            <td>
              <input type="text" name="inputs[` +i+ `][title]" placeholder="Enter your name"  /></td>
              <td><input type="text" name="inputs[` +i+ `][start_date]" placeholder="Category"  /></td>
              <td>  <input type="text" name="inputs[` +i+ `][end_date]" placeholder="Registration_no"  /></td>
              <td><button type="button" class="btn btn-danger remove-table-row">Remove</button></td>
              </tr>`
            );
          }else if(i >= 5) {
            alert("You can't add more than 5 details !!!");
          }
        });

      $(document).on('click','.remove-table-row',function(e){
        e.preventDefault();
        $(this).parents('tr').remove();
        i--;
      });

    </script>

    @endsection