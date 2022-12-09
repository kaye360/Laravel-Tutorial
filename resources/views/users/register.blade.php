<x-layout.wrapper>

  <x-layout.heading text="Register" />

  <div class="px-4 my-8">

    <form action="/laragigs/public/users" method="POST">
      @csrf
    
      <div class="flex flex-col gap-6">

        <div>
          <x-layout.input
          label="Your Name" 
          name="name"
          :value="old('name')"
          />
          
          @error('name')
            <x-layout.error>{{ $message }}</x-layout.error>
          @enderror
        </div>
        
        
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
            :value="old('password')"
          />
          @error('password')
            <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <x-layout.input
            label="Confirm Password" 
            name="password_confirmation"
            type="password"
            :value="old('password_confirmation')"
          />
          @error('password_confirmation')
            <p class="my-4 text-sm text-red-500 -translate-y-2">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <button 
            type="submit" value="Sign Up"
            class="inline-flex items-center gap-2 px-4 py-1 rounded
                  bg-red-400 hover:bg-red-700 text-white" 
          >
            <span class="material-icons-outlined">rocket</span>
            Sign Up
          </button>
        </div>

        <p class="my-4 font-light tracking-wide">
          Already have an account? 
          <a href="/laragigs/public/login" class="text-red-400 hover:text-red-800">Login</a>
        </p>
        
      </div> {{-- End Flex wrapper --}}

    
    
    
    
    </form>

  </div>


</x-layout.wrapper>