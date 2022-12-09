@props(['listing'])

<div class="flex items-top gap-8 
            max-w-2xl p-8 mx-auto my-8 rounded 
            border border-gray-200">

  <div class="shrink-0">
    <img 
      src="{{ $listing->logo 
        ? '/laragigs/storage/app/public/' . $listing->logo
        : '/laragigs/resources/img/laravel.png' 
      }}"
      alt="Company Logo"
      class="w-16"
    >
  </div>
    
  <div>
    <h2 class="mb-2 text-xl text-2xl font-bold"> 
      {{ $listing->title }} 
    </h2>

    <div class="mb-2 flex items-center gap-2">
      <span class="material-icons-outlined">corporate_fare</span>
      {{ $listing->company }}
    </div>

    <div class="mb-8 flex items-center gap-2">
      <span class="material-icons-outlined">place</span>
      {{ $listing->location }}
    </div>
  
    <p class="mb-8 font-light tracking-wide">
      {{ $listing->description }}
    </p>
  
    <p>
      <a 
        href="./listing/{{ $listing->id }}"
        class="inline-block px-4 py-2 rounded bg-red-100 hover:bg-red-300"
      > 
        Read More
      </a>
    </p>
    
    <x-listings.tags :tags="$listing->tags" />
  </div>

</div>