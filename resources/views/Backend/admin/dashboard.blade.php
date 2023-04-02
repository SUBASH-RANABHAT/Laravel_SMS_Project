@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
    <script>
    function displayTime() {
        const date = new Date();
        const time = date.toLocaleTimeString();
         $('#time').html(time);
                      }
      setInterval(displayTime, 1000);
</script>

    <b><p><span class="float-right" id="time" ></span></p></b>
    <h1 class="mt-4">Admin Dashboard</h1>
    <br>
    <br>
    <div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Total Students
            <h2>{{ $student }}</h2>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/admin/student/post">View Details. </a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Total Teachers
            <h2>5</h2>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
    
</div>


@endsection