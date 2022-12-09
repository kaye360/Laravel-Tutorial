<x-layout.wrapper>


  <x-layout.heading text="Edit Gig" />

  <a 
    href="/laragigs/public/listing/{{ $listing->id }}"
    class="inline-flex items-center my-4 px-2 py-1
          border border-gray-300 hover:border-gray-600"
  >
    <span class="material-icons-outlined">keyboard_backspace</span>
    Back
  </a>

  <form 
    method="POST" 
    enctype="multipart/form-data"
    action="/laragigs/public/listings/{{ $listing->id }}" 
  >

    @method('PUT')
    @csrf
  
    <div class="flex flex-col gap-4 my-4">

    <div>
      <x-listings.input
        label="Company Name" 
        name="company"
        :value="$listing->company"
      />
      @error('company')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <x-listings.input
        label="Job Title" 
        name="title"
        :value="$listing->title"
      />

      @error('title')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>
    
    <div>
      <x-listings.input
        label="Location" 
        name="location"
        :value="$listing->location"
      />

      @error('location')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <x-listings.input
        label="Website" 
        name="website"
        :value="$listing->website"
      />

      @error('website')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
        @enderror
      </div>
      
      <div>
        <x-listings.input
        label="Email"
        name="email"
        :value="$listing->email"
      />
      
      @error('email')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <x-listings.input
        label="Tags (Comma Separated)" 
        name="tags"
        :value="$listing->tags"
      />
      @error('tags')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <label class="flex flex-col gap-2">
      Company Logo
      <input 
        type="file" name="logo"
        class=""
      >

      <img 
        src="{{ $listing->logo 
          ? '/laragigs/storage/app/public/' . $listing->logo
          : '/laragigs/resources/img/laravel.png' 
        }}"
        alt="Company Logo"
        class="w-16"
      >
    </label>

    @error('logo')
      <p class="my-4 text-sm text-red-500">{{ $message }}</p>
    @enderror

    <div>
      <label class="block">Description</label>
      <textarea 
        name="description"
        class="resize-none w-full max-w-xl h-40 p-2 rounded 
                outline outline-blue-300
                text-sm font-light tracking-wide"
      >{{ $listing->description }}</textarea>

      @error('description')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <input 
      type="submit" value="Edit Gig"
      class="w-fit px-4 py-2 
              rounded outline outline-blue-300 hover:bg-blue-400 hover:text-white
              cursor-pointer"
    >
  </div>

  </form>


</x-layout.wrapper>