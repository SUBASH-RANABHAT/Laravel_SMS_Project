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
      <form action="{{ route('teacher_post') }}" method="POST"  enctype="multipart/form-data">
        @csrf
      <h2 class="text-center">Teacher Registration</h2><br>
       <table class="table table-bordered" id="table">
        <button type="button" name="add" id="add" class="btn btn-success">+</button>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Reg No</th>
            <th>Qualification</th>
            <th>Education</th>
            <th>Experience</th>
            <th>Action</th>

        </tr>
        <tr>
            <td><input type="text" name="inputs[0][name]" placeholder="Enter your Name "/></td>
            <td><input type="text" name="inputs[0][category]" placeholder="Category"/></td>
            <td><input type="text" name="inputs[0][reg_no]" placeholder="Registeration_no"/></td>
            <td><input type="text" name="inputs[0][qualification]" placeholder="Qualification "/></td>
            <td><input type="text" name="inputs[0][education]" placeholder="Education"/></td>
            <td><input type="text" name="inputs[0][experience]" placeholder="Experience"/></td>
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
              <input type="text" name="inputs[` +i+ `][name]" placeholder="Enter your name"  /></td>
              <td><input type="text" name="inputs[` +i+ `][category]" placeholder="Category"  /></td>
              <td>  <input type="text" name="inputs[` +i+ `][reg_no]" placeholder="Registration_no"  /></td>
              <td>  <input type="text" name="inputs[` +i+ `][qualification]" placeholder="Qualification"  /></td>
              <td> <input type="text" name="inputs[` +i+ `][education]" placeholder="Education"  /></td>
              <td> <input type="text" name="inputs[`+i+`][experience]" placeholder="Experience"/></td>
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

             function displayTime() {
                const date = new Date();
                const time = date.toLocaleTimeString();
                 $('#time').html(time);
                              }
              setInterval(displayTime, 1000);
    </script>

    @endsection