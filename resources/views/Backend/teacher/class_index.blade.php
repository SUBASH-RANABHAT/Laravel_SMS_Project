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
      <form action="{{ route('class_post') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <table class="table">
          <thead>
              <tr>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Building Block</th>
              </tr>
                </thead>
                <tbody>
            <tr>
        <td><input type="text" name="class"/></td>
        <td><input type="text" name="section"/></td>
        <td><input type="text" name="building_block"/></td>
    </tr>
                </tbody>
        <button type="submit" class="btn btn-primary">Save</button>

        </table>
      </form>
      </div>
    </div>
    @endsection


    