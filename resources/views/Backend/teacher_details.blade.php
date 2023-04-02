@extends('layouts.master')

@section('content')
<div class="container">
    <table class="table">
      <thead>
          <tr>
              <th>Name</th>
              <th>Faculty</th>
              <th>Qualification</th>
              <th>Experience</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @empty
    <td colspan="4">No data Found</td>  
    @endforelse
</tbody>
</table>  
</div>
@endsection