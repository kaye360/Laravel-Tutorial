<h1>{{ $heading }}</h1>

<p>
  <a href="../">Back to listings</a>
</p>

@if(count($listing) === 0)
  <p>
    No Listings Found
  </p>
@else


  <h2> {{ $listing['title'] }} </h2>

  <p>
    {{ $listing['description'] }}
  </p>

@endif