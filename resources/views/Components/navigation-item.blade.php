@props([
  'type'   => 'a',
  'active' => false
])

@if($type == 'a')
  <a
    {{ $attributes }}
    aria-current="{{ $active ? 'page' : 'false' }}"
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} p-3"
  >
    {{ $slot }}
  </a>
@elseif($type == 'b')
  <button
    {{ $attributes }}
    aria-current="{{ $active ? 'page' : 'false' }}"
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
  >
    {{ $slot }}
  </button>
@else
  Opção inválida
@endif
