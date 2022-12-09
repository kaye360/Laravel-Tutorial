<x-layout.wrapper>

  @if(empty($listing))
  
    <div>
      <p>
        No Listings Found
      </p>
      <p>
        <a href="../">Back to listings</a>
      </p>
    </div>
  
  @else

    {{-- Job Title heading  --}}
    <x-layout.heading :text="'View Listing: ' . $listing->title" />

    {{-- Back Button --}}
    <div class="px-8 my-4">
      <a 
        href="/laragigs/public"
        class="inline-flex align-center bg-grey-200 px-2 py-1 border border-grey-400 hover:border-black"
      >
      <span class="material-icons-outlined">keyboard_backspace</span>
        Back
    </a>
    </div>

    {{-- logo/job data wrapper --}}
    <div class="flex items-top gap-8 px-8 my-4">

      {{-- Logo --}}
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

      {{-- Job Data --}}
      <div>
        
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
            class="inline-flex items-center gap-2 round px-4 py-1 bg-red-200 hover:bg-gray-400"
          >
            <span class="material-icons-outlined">web</span>
            Website
          </a>
          
          <a 
            href="mailto:{{ $listing->email }}"
            class="inline-flex items-center gap-2 round px-4 py-1 bg-green-200 hover:bg-gray-400"
          >
            <span class="material-icons-outlined">email</span>
            Email
          </a>
        </div>
    
        <p class="max-w-xl font-light tracking-wide">
          {{ $listing->description }}
        </p>
    
        <x-listings.tags :tags="$listing->tags" />

      </div> {{-- end job data--}}

    </div> {{-- end logo/job data flex wrapper --}}

    {{-- Edit/Delete Buttons --}}
    <div>
    
      <a 
        href="/laragigs/public/listings/{{ $listing->id }}/edit"
        class="inline-flex items-center gap-2 px-4 py-1 border border-gray-300"
      >
        <span class="material-icons-outlined">edit</span>
        Edit
      </a>
    
      <form method="POST" action="/laragigs/public/listings/{{ $listing->id }}" class="inline-block">

        @csrf
        @method('DELETE')

        <button 
          class="inline-flex items-center gap-2 px-4 py-1 border border-red-400 text-red-400"
        >
          <span class="material-icons-outlined">delete</span>
          Delete
        </button>

      </form>
      
    </div>

      
    @endif

  </x-layout.wrapper>