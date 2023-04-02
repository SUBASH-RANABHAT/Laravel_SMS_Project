@extends('layouts.app')

@section('content')
  
<h1 class="text-center text-success ">Welcome, {{ Auth::user()->name }} !!!</h1>
<h9 class="text-center">.</h9>
<h9 class="text-center">.</h9>
<h9 class="text-center">.</h9>
<h2 class="text-center text-danger">Now, Logout the Page.</h2>
  
@endsection