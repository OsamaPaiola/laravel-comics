@extends ('layouts.main')

@section('content')
<main>
  <section class="general-hero" style="background-image: url({{$comic['image-hero']}})">
    <div class="container">
      <img src="{{$comic['image-cover']}}" alt="Teen Go">
    </div>
  </section>

  <section class="detail">
    <div class="container">
      <h1>{{$comic['title']}}</h1>
      <div class="price">
        {{$comic['price']}}
      </div>
      <div class="body">
        {!!$comic['body']!!}
      </div>
    </div>
  </section>
</main>
@endsection
