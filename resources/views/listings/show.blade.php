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

      <div class="flex flex-col gap-2 py-4">
        <span class="flex align-center gap-2 font-bold">
          <span class="material-icons-outlined">corporate_fare</span>
          {{ $listing->company }} 
        </span>
        <span class="flex align-center gap-2">
          <span class="material-icons-outlined">place</span>
          {{ $listing->location }} 
        </span>
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

      <div class="my-4">
        <a 
          href="/laragigs/public"
          class="inline-flex align-center bg-grey-200 px-2 py-1 border border-grey-400 hover:border-black"
        >
        <span class="material-icons-outlined">
          keyboard_backspace
        </span>
          Back
      </a>
      </div>

      <p>
        {{ $listing->description }}
      </p>

      <x-listing-tags :tags="$listing->tags" />

      <div>

      </div>

      
    @endif
  </div>

@endsection