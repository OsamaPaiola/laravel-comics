@extends ('layouts.main')

@section('content')
<main>

  <!-- JUMBO -->
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
    </div>
  </section>
</main>
@endsection
