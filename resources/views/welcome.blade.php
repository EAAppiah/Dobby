<x-layout>
  <x-slot:heading>
    Home Page
  </x-slot:heading>
  <div class="container mx-auto pt-8">
    <form id="loginForm" class="flex justify-center" x-data="{ mode: 'user' }" @submit.prevent="submitForm">
      @csrf

      <div class="relative bg-white rounded-lg shadow-lg p-8 w-[400px] max-w-[90%]">
        <h3 class="text-2xl text-center text-black font-semibold mb-4">Login as:</h3>
        <div class="flex justify-center items-center mb-4">
          <x-mode-toggle-button mode="user" x-model="mode">
            User
          </x-mode-toggle-button>
          <x-mode-toggle-button mode="facility" x-model="mode">
            Facility
          </x-mode-toggle-button>
        </div>

        <div class="relative my-4 flex flex-col items-center">
          <input type="password" name="password"
            class="w-full max-w-xs p-4 pl-10 text-sm text-gray-900 border border-gray-400 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
            :placeholder="mode === 'user' ? 'Enter your User password' : 'Enter your Facility password'" autofocus
            autocomplete="off" required />
          <i
            class="ri-lock-2-fill text-purple-800 text-xl absolute left-3 md:left-4 top-1/2 transform -translate-y-1/2"></i>
        </div>

        <div class="relative my-4 flex flex-col items-center">
          <input type="tel" name="phone"
            class="w-full max-w-xs p-4 pl-10 text-sm text-gray-900 border border-gray-400 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
            :placeholder="mode === 'user' ? 'Enter your User phone number' : 'Enter your Facility phone number'"
            autocomplete="off" required />
          <i
            class="ri-phone-fill text-purple-800 text-xl absolute left-3 md:left-4 top-1/2 transform -translate-y-1/2"></i>
        </div>

        <div class="flex justify-center">
          <x-login-button type="submit">
            Enter
          </x-login-button>
        </div>

        <input type="hidden" name="login_mode" x-bind:value="mode">
      </div>
    </form>
  </div>
</x-layout>