@props(['label', 'name'])


  <label class="block w-full max-w-xl">

    <div>
      {{ $label }}
    </div>

    <input 
      type="text" 
      name="{{ $name }}" 
      class="p-2 rounded w-full
             outline outline-1 outline-gray-300 focus:outline-blue-500
             text-sm font-light tracking-wide"
      value="{{ old($name) }}"
    />
  </label>