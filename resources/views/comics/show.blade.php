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

  <!-- SECTION TALENT AND SPECS -->
    <section class="main-specs">
      <div class="container d-flex">

        <!-- content talent -->
        <div class="talent">
          <h4>Talent</h4>

          <!-- first row -->
          <div class="row d-flex art-by">
            <div class="title ">
              Art by:
            </div>
            <div class="content">
              <a href="#">Lorem ipsum dolor sit amet</a>
            </div>
          </div>
          <!-- second row -->
          <div class="row d-flex  written-by">
            <div class="title ">
              Art by:
            </div>
            <div class="content">
              <a href="#">Lorem ipsum dolor sit amet</a>
            </div>
          </div>
        </div>

        <!-- content specs -->
        <div class="specs">
          <h4>Specs</h4>
          <!-- first row -->
          <div class="row d-flex series">
            <div class="title">
              Series:
            </div>
            <div class="content">
              <a href="#">{{$comic['title']}}</a>
            </div>
          </div>
          <!-- second row -->
          <div class="row d-flex price">
            <div class="title">
              U.S. Price:
            </div>
            <div class="content">
            ${{$comic['price']}}
            </div>
          </div>
          <div class="row d-flex sale">
            <div class="title">
              On Sale Date:
            </div>
            <div class="content">
              Nov 10 2010
            </div>
          </div>

        </div>
      </div>
    </section>
</main>
@endsection
