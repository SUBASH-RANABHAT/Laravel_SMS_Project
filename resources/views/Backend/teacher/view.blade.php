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

          <form action="" class="col-5">
            <div class="form-group">
              <input type="text" name="search" id="" class="form-control" placeholder="Search Name" />
            </div>
            <button class="btn btn-primary">Search</button>
          </form>

          <a href="{{ route('teacher') }}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add Teacher</button> </a>
              <div class="container">
              <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Registeration No</th>
                        <th>Qualification</th>
                        <th>Education</th>
                        <th>Experience</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($teacher as $value)
                    <tr>
                        <td>{{$value->teacher_id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->category}}</td>
                        <td>{{$value->Reg_no}}</td>
                        <td>{{$value->qualification}}</td>
                        <td>{{$value->education}}</td>
                        <td>{{$value->experience}}</td>
                        <td><a href="{{ route('teacher.edit', ['id' => $value->teacher_id]) }}"><button class="btn btn-primary">Edit</button></a>
                        <a href="{{ route('teacher.view')}}"><button class="btn btn-primary">View</button></a>
                        <a href="{{ route('teacher.delete', ['id' => $value->teacher_id]) }}"> <button class="btn btn-danger">Delete</button></a></td>
                        
                    </tr>
                    @endforeach
                </tbody>
              </table>  
              {{-- <div class="row">
                {{$teacher->links('pagination::bootstrap-4')}}
              </div> --}}
              </div>

    @endsection