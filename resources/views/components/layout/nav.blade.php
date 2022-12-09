<nav>
  <ul class="flex items-center gap-4">

    @auth

    {{-- Logged In Nav --}}

      <span class="uppercase">
        Welcome, {{ auth()->user()->name }}
      </span>

      <x-layout.nav-link 
        href="/laragigs/public/listings/create"
        text="Create"
        icon="add_circle_outline"
      />

      <x-layout.nav-link 
        href="/laragigs/public/listings/manage"
        text="Manage"
        icon="settings"
      />

      <form method="POST" action="/laragigs/public/logout" class="inline-block m-0 p-0">
        @csrf

        <button 
          type="submit"
          class="inline-flex items-center gap-1 px-2 py-1 rounded 
                 border border-red-100 hover:border-red-400 -translate-y-1"
        >
          <span class="material-icons-outlined">logout</span>
          Log Out
        </button>

      </form>

    @else

      {{-- Logged out nav --}}

      <x-layout.nav-link 
        href="/laragigs/public/register"
        text="Register"
      />

      <x-layout.nav-link 
        href="/laragigs/public/login"
        text="Login"
      />
    
    @endauth

  </ul>
</nav>