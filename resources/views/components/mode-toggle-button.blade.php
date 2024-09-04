<button 
  type="button"
  {{ $attributes->merge([
    'class' => 'text-xl font-bold py-2 px-4 rounded mr-2 transition-colors duration-200 ease-in-out text-purple-800',
  ]) }}
  :class="{ 
    'underline underline-offset-8 hover:underline': mode === '{{ $mode }}',
    'hover:underline': mode !== '{{ $mode }}'
  }"
  @click="mode = '{{ $mode }}'"
>
  {{ $slot }}
</button>