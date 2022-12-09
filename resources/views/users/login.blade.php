<x-layout.wrapper>

  <x-layout.heading text="Sign In" />

  <div class="px-4 my-8">

    <form action="/laragigs/public/users/auth" method="POST">
      @csrf
    
      <div class="flex flex-col gap-6">

        <div>
          <x-layout.input
          label="Your Email" 
          name="email"
          type="email"
          :value="old('email')"
          />
          
          @error('email')
            <x-layout.error>{{ $message }}</x-layout.error>
          @enderror
        </div>

        <div>
          <x-layout.input
            label="Password" 
            name="password"
            type="password"
          />
        </div>

        <div>
          <button 
            type="submit" value="Sign Up"
            class="inline-flex items-center gap-2 px-4 py-1 rounded
                  bg-red-400 hover:bg-red-700 text-white" 
          >
            <span class="material-icons-outlined">rocket</span>
            Sign In
          </button>
        </div>

        <p class="my-4 font-light tracking-wide">
          Don't have an account? 
          <a href="/laragigs/public/register" class="text-red-400 hover:text-red-800">Register</a>
        </p>
        
      </div> {{-- End Flex wrapper --}}

    
    
    
    
    </form>

  </div>


</x-layout.wrapper>