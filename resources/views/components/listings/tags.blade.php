@props(['tags'])

@php

  $tags = explode(',', $tags);

@endphp



<div class="my-3">

  @foreach ($tags as $tag)
  
    <a 
    href="/laragigs/public?tag={{ $tag }}"
    class="inline-block rounded px-2 py-1 bg-black hover:bg-red-300 text-white hover:text-red-800"  
    >{{ $tag }} </a>
    
  @endforeach
  
</div>