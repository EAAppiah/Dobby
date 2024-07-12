<button {{ $attributes->merge([
  'class' => 'rounded-full uppercase tracking-[1.02px] flex items-center justify-center
  transition-all bg-transparent border-2 border-purple-800 purple-800 hover:bg-purple-800
  hover:border-transparent hover:text-white h-14 px-10 w-[240px] lg:w-auto mx-auto lg:mx-0'
]) }}>{{ $slot }}</button>