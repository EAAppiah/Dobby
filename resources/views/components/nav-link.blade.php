@props(['active' => false])

<a class="{{ $active ? ' text-gray-700' : 'hover:bg-gray-100 hover:text-purple-600'}} rounded-md px-3 py-2"
  aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>