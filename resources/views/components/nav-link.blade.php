@props(['active' => false])

<a class="{{ $active ? 'text-purple-600 bg-gray-100' : 'text-gray-700 hover:text-purple-600'}} rounded-md px-3 py-2"
  aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>