<x-layout.wrapper>

  <x-hero.hero />


  @if( count($listings) === 0 )
    <p class="p-8">
      No Listings Found
    </p>
  @else

    @foreach($listings as $listing)
      <x-listings.card :listing="$listing" />
    @endforeach

    <div class="mx-auto my-2 max-w-2xl">
      {{ $listings->links() }}
    </div>

  @endif

</x-layout.wrapper>