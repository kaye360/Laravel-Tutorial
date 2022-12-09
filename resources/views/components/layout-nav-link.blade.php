@props(['href', 'text'])

<li>
  <a 
    href="{{ $href }}" 
    class="text-blue-800 hover:text-red-700 font-bold"
  >
    {{ $text }}
  </a>
</li>