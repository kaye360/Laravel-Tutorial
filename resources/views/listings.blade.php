<h1>{{ $heading }}</h1>

@if( count($listings) === 0 )
  <p>
    No Listings Found
  </p>
@else

  @foreach($listings as $listing)

  <h2> {{ $listing['title'] }} </h2>

  <p>
    {{ $listing['description'] }}
  </p>

  <p>
    <a href="./listing/{{ $listing['id'] }}"> Read More</a>
  </p>
  @endforeach

@endif