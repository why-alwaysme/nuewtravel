@extends('layouts.success')
@section('title', 'Payment Success')

@section('content')

<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{url('frontend/images/payment.png')}}" alt="">
        <h1>Payment Success!</h1>
        <p>
          We have sent you email for trip instruction
          <br>
          please read it as well
        </p>
        <a href=" {{Route('home')}} " class="btn btn-home-page mt-3 px-5" >Home Page</a>
      </div>
    </div>
  </main>

@endsection
