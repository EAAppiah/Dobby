<!doctype html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Dobby</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
  <nav class="py-8 lg:pt-6 bg-white border-b">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <a href="/" class="flex items-center">
          <img
            src="https://media.licdn.com/dms/image/D4E0BAQHw_-SA_XwbNg/company-logo_200_200/0/1710367424345/foundations_recovery_network_logo?e=2147483647&v=beta&t=OZA2tE_egFtdNgabXO7aptyi-yv4AYMJNdMgfc4XlGY"
            alt="Dobby" class="w-12 h-12" />
          <h1 class="text-[20px] lg:text-[26px] ml-1 font-semibold">Dobby</h1>
        </a>

        <div class="ml-10 flex items-baseline space-x-4">
          <x-nav-link href="/referral" :active="request()->is('referral')">Referrals</x-nav-link>
          <x-nav-link href="/request" :active="request()->is('request')">Requests</x-nav-link>
          <x-nav-link href="/admin" :active="request()->is('admin')">Admin</x-nav-link>
          <x-nav-link href="/tracker" :active="request()->is('tracker')">Tracker</x-nav-link>
        </div>

        <!-- btn -->
        <div class="flex justify-end items-center">
          <x-contact-button>Contact Us</x-contact-button>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
  </div>
</body>

</html>