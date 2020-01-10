@extends('layouts.default')

@push('styles')
     <link rel="stylesheet" href="css/custom-style.css">
@endpush

@section('content')

<h3>Please fill in the form to register</h3>

<div>
  <form action="/insert" method="post">
  	{{ csrf_field() }} 
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    <input type="submit" value="Submit">
  </form>
</div>
@stop   






