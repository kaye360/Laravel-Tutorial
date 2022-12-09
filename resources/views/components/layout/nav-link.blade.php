@props(['href', 'text', 'icon' => false])

<li>
  <a 
    href="{{ $href }}" 
    class="inline-flex items-center gap-1
           text-black hover:text-red-700 font-bold"
  >
    @if ($icon)
      <span class="material-icons-outlined">
        {{ $icon }}
      </span>
    @endif 

    {{ $text }}
  </a>
</li>