@props(['selected' => false, 'option' => ''])

<button {{ $attributes->merge([
  'class' => 'text-purple-800 text-xl hover:underline font-bold py-2 px-4 rounded mr-2 ' . ($selected ? 'underline underline-offset-8' : '')
]) }}>
  {{ $slot }}
</button>