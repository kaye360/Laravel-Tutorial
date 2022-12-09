@if ( session()->has('message') )

  <div
    class="animate-flash
           fixed top-8 left-1/2 transform -translate-x-1/2 px-16 py-4
           bg-blue-800 text-white text-center font-medium"
  >

    {{ session('message') }}

  </div>

@endif