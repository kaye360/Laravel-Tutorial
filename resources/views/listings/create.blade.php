 @extends('layout')

 @section('content')


 <h2 class="my-4 font-bold text-xl">Create a gig</h2>

 <form method="POST" action="/laragigs/public/listings">
  @csrf
  
  <div class="flex flex-col gap-4 my-4">

    <div>
      <x-listing-create-input
        label="Company Name" 
        name="company"
      />
      @error('company')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <x-listing-create-input
        label="Job Title" 
        name="title"
      />

      @error('title')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>
    
    <div>
      <x-listing-create-input
        label="Location" 
        name="location"
      />

      @error('location')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <x-listing-create-input
        label="Website" 
        name="website"
      />

      @error('website')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
        @enderror
      </div>
      
      <div>
        <x-listing-create-input
        label="Email"
        name="email"
      />
      
      @error('email')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <x-listing-create-input
        label="Tags (Comma Separated)" 
        name="tags"
      />
      @error('tags')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    {{-- <label class="flex flex-col gap-2">
      Company Logo
      <input 
        type="file" name="logo"
        class=""
      >
    </label>
    @error('logo')
      <p class="my-4 text-sm text-red-500">{{ $message }}</p>
    @enderror --}}

    <div>
      <label class="block">Description</label>
      <textarea 
        name="description"
        class="resize-none w-full max-w-xl h-40 p-2 rounded 
               outline outline-blue-300
               text-sm font-light tracking-wide"
      ></textarea>

      @error('description')
        <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
      @enderror
    </div>

    <input 
      type="submit" value="Add Gig"
      class="w-fit px-4 py-2 
             rounded outline outline-blue-300 hover:bg-blue-400 hover:text-white
             cursor-pointer"
    >
  </div>

 </form>


 @endsection