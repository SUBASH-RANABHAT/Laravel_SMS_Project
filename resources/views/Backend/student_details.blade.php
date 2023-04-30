@extends('layouts.master')

@section('content')
<div class="container">
    <table class="table">
      <thead>
          <tr>
              <th>Name</th>
              <th>Class</th>
              <th>Roll No</th>
              <th>Email</th>
              <th>Image</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
    <tr>
        <td>{{ $post->name }}</td>
        <td>{{ $post->class }}</td>
        <td>{{ $post->roll_no}}</td>
        <td>{{ $post->email }}</td>
        <td><img src="{{ $post->image }}" width="70px" height="70px" alt="Image"></td>
        <td><a href="{{ url('student/edit/'.$post->id) }}" class="btn btn-primary">Edit</a></td>
        <td><a href="{{ url('student/delete/'.$post->id) }}" class="btn btn-danger">Delete</a></td>
    </tr>
    @empty
    <td colspan="4">No data Found</td>  
    @endforelse
</tbody>
</table>  
{{-- <div class="row">
    {{$posts->links('pagination::bootstrap-4')}}
  </div> --}}
</div>
@endsection