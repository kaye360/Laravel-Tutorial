<x-layout.wrapper>

  <x-layout.heading text="Manage your Listings" />

  <table
    class="w-full table-auto border border-gray-300 my-8"
  >

    <tbody>

      @unless ( $listings->isEmpty() )
      
        @foreach ($listings as $listing)

          <tr>

            <td class="p-4 w-full">
              {{ $listing->title }}
            </td>

            <td class="p-4 font-medium">
              <a 
                href="/laragigs/public/listings/{{ $listing->id }}/edit"
                class="inline-flex items-center gap-2 hover:text-blue-400"
              >
                <span class="material-icons-outlined">edit</span>
                Edit
              </a>
            </td>

            <td class="p-4">
              <form method="POST" action="/laragigs/public/listings/{{ $listing->id }}" class="inline-block">

                @csrf
                @method('DELETE')
        
                <button 
                  class="inline-flex items-center gap-2 px-4 py-1 
                         text-red-400 hover:text-blue-400 font-medium"
                >
                  <span class="material-icons-outlined">delete</span>
                  Delete
                </button>
        
              </form>
            </td>
          </tr>
            
        @endforeach

      @else

          <tr>
            <td class="p-4">
              <p>No Listings found</p>
            </td>
          </tr>

      @endunless

    </tbody>

  </table>

</x-layout.wrapper>
