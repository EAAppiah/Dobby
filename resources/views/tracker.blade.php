<x-layout>
  <x-slot:heading>
    Referral Tracker Page
  </x-slot:heading>

  <div class="container mx-auto pt-4">
    <form id="referralForm" class="flex justify-center" x-data="{ mode: 'user' }">
      @csrf

      <div class="relative bg-white rounded-lg shadow-lg p-8 w-[400px] max-w-[90%]">
        <h3 class="text-2xl text-center text-black font-semibold mb-4">Login as:</h3>
        <div class="flex justify-center items-center mb-4">
          <x-accent-button id="userButton" x-on:click.prevent="mode = 'user'">
            User
          </x-accent-button>
          <x-accent-button id="facilityButton" x-on:click.prevent="mode = 'facility'">
            Facility
          </x-accent-button>
        </div>

        <div class="relative my-4 flex flex-col items-center">
          <input type="password"
            class="w-full max-w-xs p-4 pl-10 text-sm text-gray-900 border border-gray-400 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
            :placeholder="mode === 'user' ? 'Enter your User password' : 'Enter your Facility password'" autofocus
            autocomplete="off" required />
          <i
            class="ri-lock-2-fill text-purple-800 text-xl absolute left-3 md:left-4 top-1/2 transform -translate-y-1/2"></i>
        </div>

        <div class="relative my-4 flex flex-col items-center">
          <input type="tel"
            class="w-full max-w-xs p-4 pl-10 text-sm text-gray-900 border border-gray-400 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
            :placeholder="mode === 'user' ? 'Enter your User phone number' : 'Enter your Facility phone number'"
            autocomplete="off" required />
          <i
            class="ri-phone-fill text-purple-800 text-xl absolute left-3 md:left-4 top-1/2 transform -translate-y-1/2"></i>
        </div>

        <div class="flex justify-center">
          <x-login-button>
            Enter
          </x-login-button>
        </div>
      </div>
    </form>
  </div>
</x-layout>