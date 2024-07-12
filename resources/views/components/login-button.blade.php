<button {{ $attributes->merge([
  'class' => "w-full max-w-xs text-white bg-purple-800 hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-4"
]) }}>{{ $slot }}</button>