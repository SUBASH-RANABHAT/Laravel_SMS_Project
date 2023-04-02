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
      <form action="" method="POST"  enctype="multipart/form-data">
        @csrf<!-- {{ csrf_field() }} -->
        <div class="card-body">
            @foreach ($schedule as $value)
            <tr>
              <td>{{ $value->teacher->name }}</td>
            </tr>
            @endforeach
          </div>
      </form>
    </div>
    </div>

    @endsection