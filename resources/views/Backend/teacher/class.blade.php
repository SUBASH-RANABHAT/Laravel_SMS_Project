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

          <a href="{{ route('class') }}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add Class</button> </a>
              <div class="container">
              <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Building Block</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $value)
                    <tr>
                        <td>{{$value->class_id}}</td>
                        <td>{{$value->class}}</td>
                        <td>{{$value->section}}</td>
                        <td>{{$value->building_block}}</td>
                        <td><a href=""><button class="btn btn-primary">Edit</button></a>
                        <a href=""><button class="btn btn-primary">View</button></a>
                        <a href=""> <button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
              </table>  
              </div>

    @endsection