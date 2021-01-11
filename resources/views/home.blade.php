@extends ('layouts.main')

@section('content')
<main>

  <!-- GENERAL HERO  -->
  <section class="general-hero">
    <div class="container">
      <img src="{{asset('images/cover-home.jpg')}}" alt="Teen Go">
      <h1 class="row">
        current series
      </h1>
    </div>
  </section>

  <!-- COMICS HOME -->
  <section class="comics">
    <div class="container">
      <ul class="comic-list">
        @foreach ($comics as $comic)
        <li>
          <a href="{{route('comic-detail', $comic['id'])}}">
            <img src="{{$comic['image']}}" alt="{{$comic['title']}}">
            <h3>{{$comic['title']}}</h3>
          </a>
        </li>
        @endforeach
      </ul>
      <div class="btn">
        <button type="button" name="button">LOAD MORE</button>
      </div>
    </div>
  </section>

  <!-- DC COMICS INFO -->
  <section class="info">
    <div class="container">
      <ul class="list-info">
        <li>
          <a href="#">
            <img src="{{asset('images/digital-comics.png')}}" alt="">
            <h6>digital comics</h6>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('images/merchandise.png')}}"alt="">
            <h6>merchandise</h6>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('images/subscriptions.png')}}" alt="">
            <h6>subscription</h6>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('images/shop-locator.png')}}" alt="">
            <h6>comic shop location</h6>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="{{asset('images/power-visa.svg')}}" alt="">
            <h6> power visa</h6>
          </a>
        </li>
      </ul>
    </div>
  </section>
</main>
@endsection
