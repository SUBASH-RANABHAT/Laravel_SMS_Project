<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Student Login</title>
</head>
<body>
 
<div class="card ">
    <div class="card-body">
<form action="{{ route('student_check') }}" method="post">
  @csrf
  
  {{-- @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
    @endif --}}
   
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" >Email address</label>
      <input type="email" class="form-control" />
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" />
    </div>
  
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <label class="form-check-label"> </label>
        </div>
      </div>
   
    <!-- Register buttons -->
    <div class="text-center">
      <p>Not a member? <a href="{{ route('student_register') }}">Register</a></p>
    </div>
     <!-- Submit button -->
     <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
    </div>
</div>
</body>
</html>