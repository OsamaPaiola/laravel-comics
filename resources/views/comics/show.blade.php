@extends ('layouts.main')

@section('content')
<main>

  <!-- GENERAL HERO -->
  <section class="general-hero" style="background-image: url({{$comic['image-hero']}})">
    <div class="container">
      <img src="{{$comic['image-cover']}}" alt="Teen Go">
    </div>
  </section>

<!-- DETAIL -->
  <section class="detail">
    <div class="container">

      <div class="descrition">
        <h1>{{$comic['title']}}</h1>
        <div class="price">
          <span>U.S. Price: ${{$comic['price']}}</span>
          <span>AVAILABLE ON 11/10</span>
          <span>Chech Availability</span>
        </div>
        <div class="body">
          {!!$comic['body']!!}
        </div>
      </div>

      <div class="advertisement">
        <h5>ADVERTISEMENT</h5>
        <img src="{{asset('images/adv.png')}}" alt="DC COMIC">
      </div>
    </div>
  </section>
</main>
@endsection
