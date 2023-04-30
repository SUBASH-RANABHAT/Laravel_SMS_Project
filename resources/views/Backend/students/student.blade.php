<!DOCTYPE html>
<html>
  <head>
    <style>
     .card {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  margin: 20px auto;
  width: 50%;
  
}

@media (min-width: 768px) {
  .card {
    width: 50%;
  }
}

form {
  display: flex;
  flex-direction: column;
}
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Register</title>
    <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js" type="text/javascript"></script>
    <link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.1.min.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><b>NEBS</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('student_login') }}">Login</a>
            </li>
        </ul>
      </div>
    </nav>
    <div class="card">
      @if(session('message'))
      <h4 class="alert alert-success">{{ session('message')}}</h4>
      @endif
  
  
          @if ($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </div>
          @endif
      <div class="card-body">
      <form action="{{ route('student_store') }}" method="post"  enctype="multipart/form-data">
        @csrf
      <h2 class="text-center">Student Registration</h2>
        <div class="form-group">
         <p><input type="text" id="nepali-datepicker" placeholder="Select NepaliDate"/></p>
         <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js" type="text/javascript"></script>
                  <script type="text/javascript">
                                    window.onload = function() {
                                  var mainInput = document.getElementById("nepali-datepicker");
                                  mainInput.nepaliDatePicker();
                                              };
                  </script>
          <label for="name">Name:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="name" />
          </div>
          <span class="text-danger">@error('name'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <div class="col-sm-12">
          <input type="email" class="form-control" name="email" value=""/></div>
          <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <label for="name">Class</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="class" value=""/>
          </div>
          <span class="text-danger">@error('class'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <label for="name">Roll No:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="roll_no" value=""/>
          </div>
          <span class="text-danger">@error('roll_no'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <div class="col-sm-12">
          <input type="password" class="form-control" name="password" value=""/></div>
          <span class="text-danger">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <label for="image">Upload Image</label>
          <input type="file" name="image" class="form-control-file" id="image">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
  </body>
</html>