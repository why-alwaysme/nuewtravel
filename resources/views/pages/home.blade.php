@extends('layouts.app')

@section('title')
    Nuewtravel
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
  <h1>
    Explore The Beautiful World
    <br>
    As Easy One Click
  </h1>
  <p>
    You will see beautiful
    <br>
    moment you never see before
  </p>
  <a class="btn btn-get-started px-4 mt-4" href="#popular">Get Started</a>
</header>

<main>
  <div class="container">
    <section class="section-stats row justify-content-center" id="stats">
      <div class="col-3 col-md-2 stats-detail">
        <h2>20K</h2>
        <p>Members</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>12</h2>
        <p>Countries</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>3K</h2>
        <p>Hotel</p>
      </div>
      <div class="col-3 col-md-2 stats-detail">
        <h2>72</h2>
        <p>Partners</p>
      </div>
    </section>

  </div>

  <section class="section-popular" id="popular">
    <div class="container">
      <div class="row">
        <div class="col text-center section-popular-heading">
          <h2>Popular Destination</h2>
          <p>
            Something that you never seen
          <br>
            before in this world
          </p>
        </div>
      </div>
    </div>

  </section>

  <section class="section-popular-content" id="popular-content">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        @foreach ($items as $item)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" 
          style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('{{ $item->galleries->count() ?  
          Storage::url($item->galleries->first()->image): '' }}')">
            <div class="travel-country">{{ $item->location }}</div>
            <div class="travel-location">{{ $item->title}}</div>
            <div class="travel-button mt-auto">
              <a class="btn btn-travel-details px-4" href=" {{Route('detail', $item->slug)}} ">View Details</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      </div>
    </div>
  </section>

  <section class="section-networks">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Our Networks</h2>
          <p>
            Companies are trusted us
            <br>
            more than just a trip
          </p>
        </div>
          <div class="col-md-8 text-right">
            <img class="img-partner" src="frontend/images/partner4.png" alt="Logo Partner">
            <img class="img-partner" src="frontend/images/partner3.png" alt="Logo Partner">
          </div>
      </div>
    </div>
  </section>

  <section class="section-testimonial-heading" id="testimonialheading">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>They Are Loving Us</h2>
          <p>
            Moments were giving them
            <br>
            the best experience
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-testimonial-content" id="testimonialcontent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/testimonial1.jpg" alt="User" class="mb-4 rounded-circle">
              <h3 class="mb-4">Awkarin</h3>
              <p>"Hati-hati kamu jamet, jangan main main"</p>
            </div>
            <hr>
            <p class="trip-to mt-2">Trip to Labuan Bajo</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/testimonial2.jpg" alt="User" class="mb-4 rounded-circle">
              <h3 class="mb-4">Dasha Taran</h3>
              <p>"Ya lyublyu tebya"</p>
            </div>
            <hr>
            <p class="trip-to mt-2">Trip to Labuan Buenos Aires</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/testimonial3.jpg" alt="User" class="mb-4 rounded-circle">
              <h3 class="mb-4">Anya Geraldine</h3>
              <p>"gua selebgram"</p>
            </div>
            <hr>
            <p class="trip-to mt-2">Trip to Oslo</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a class="btn btn-need-help px-4 mt-4 mx-1" href="#">
            I Need Help
          </a>
          <a class="btn btn-get-started px-4 mt-4 mx-1" href="{{ route('register') }}">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection