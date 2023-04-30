@extends('layouts.student_master')

@section('student_content')
<h2 class="my-2 mx-2 text-secondary">Fee Status</h2>

<table class="table mx-2 my-4">
    <thead class="thead-light">
      <tr>
        <th scope="col">Narration</th>
        <th scope="col">Roll No</th>
        <th scope="col">Bill Number</th>
        <th scope="col">Bill Date</th>
        <th scope="col">Due Date</th>
        <th scope="col">Status</th>
        <th scope="col">Due Amount</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)

      <tr>
        <td>Six Semester Fee</td>
        <td>{{ $post->roll_no}}</td>
        <td>02024</td>
        <td>2022-08-29</td>
        <td>2022-09-12</td>
       <td><span class="badge rounded-pill text-bg-danger">Due</span></td>
        <td>70350</td>
        <td><button type="button" class="btn btn-success"><i>Pay Online</i></button></td>
      </tr>
      @empty
      <td colspan="4">No data Found</td>  
      @endforelse
    </tbody>
  </table>
@endsection