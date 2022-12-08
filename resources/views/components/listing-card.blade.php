@props(['listing'])

<div class="max-w-2xl p-8 mx-auto my-8 rounded border border-gray-200">
      
  <h2 class="mb-8 text-xl font-bold"> 
    {{ $listing->title }} 
  </h2>

  <p class="mb-8">
    {{ $listing->description }}
  </p>

  <p>
    <a 
      href="./listing/{{ $listing->id }}""
      class="inline-block px-4 py-2 rounded bg-red-100 hover:bg-red-300"
    > 
      Read More
    </a>
  </p>

  <x-listing-tags :tags="$listing->tags" />

</div>