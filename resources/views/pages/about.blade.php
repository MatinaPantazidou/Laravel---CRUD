@extends('layouts.app')
@section('content')
   <section>
    
  <div>
    <ul>
      <li><a href="/HomePage">BurghAnchor</a></li>
      <li><a href="/projects">Projects</a></li>
      <li><a href="/homes">Register Form (Captains)</a></li>
      <li><a href="/contact">Contact the Captain</a></li>
      <li><a href="/CaptainInfo">Captains' Information</a></li>
    </ul>
  </div>


  
  <article>
    <!--{!! $MyNavBar->asUl() !!} -->
    <!-- @include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()]) -->
    <h1>BurghAnchor</h1>
    <h3>Welcome to our company!</h3><br>
    <p>You can rent a yacht, a boat, a water scooter... You can register as a captain or as a yacht owner!!</p>
    <p>Contact us and enjoy our services.</p>
    <h3>It is our pleasure!!</h3>

  </article>
</section>
@stop
