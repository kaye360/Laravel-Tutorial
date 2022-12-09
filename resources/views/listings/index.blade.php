@extends('layout')


@section('content')
@include('partials._hero')


  @if( count($listings) === 0 )
    <p>
      No Listings Found
    </p>
  @else

    @foreach($listings as $listing)

      <x-listing-card :listing="$listing" />
      
    @endforeach

    <div class="mx-auto my-2 max-w-2xl">
      {{ $listings->links() }}
    </div>

  @endif

@endsection