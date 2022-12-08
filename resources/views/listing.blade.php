@extends('layout')


@section('content')


<div>
  
  
  @if(empty($listing))
  
  <p>
    No Listings Found
  </p>
  <p>
    <a href="../">Back to listings</a>
  </p>
  
  @else
  
      <h2 class="text-2xl p-8 bg-blue-200">
        View Listing:
        {{ $listing->title }}
      </h2>

      <div class="py-4">
        Hiring: 
        <span class="font-bold">
          {{ $listing->company }} 
        </span>
        in {{ $listing->location }} 
      </div>
      
      <div class="mb-6">
        <a 
          href="{{ $listing->website }}"
          class="inline-block round px-4 py-1 bg-red-200 hover:bg-gray-400"
          >Website</a>
          <a 
          href="mailto:{{ $listing->email }}"
          class="inline-block round px-4 py-1 bg-green-200 hover:bg-gray-400"
        >Email</a>
      </div>

      <p>
        {{ $listing->description }}
      </p>

      <div>
        {{ $listing->tags }}
      </div>

      <div>

      </div>

      
    @endif
  </div>

@endsection