<x-layout>
  <x-slot:heading>
    Request Page
  </x-slot:heading>
  <div class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
      <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
          {{-- Status Filter --}}
          <div class="w-full md:w-auto mb-4 md:mb-0">
            @php
        $statuses = ['Pending', 'Accepted', 'Rejected'];
        @endphp
            <div class="hidden md:flex rounded-lg overflow-hidden">
              @foreach ($statuses as $index => $status)
          <button
          class="px-4 py-2 {{ $loop->first ? 'rounded-l-lg' : '' }} {{ $loop->last ? 'rounded-r-lg' : '' }} {{ $index === 0 ? 'bg-blue-700 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
          {{ $status }}
          </button>
        @endforeach
            </div>
            <div class="md:hidden">
              <label for="status-select" class="block text-sm font-medium text-gray-700 mb-1">Filter by status:</label>
              <select id="status-select"
                class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                <option value="">All</option>
                @foreach ($statuses as $status)
          <option value="{{ strtolower($status) }}">{{ $status }}</option>
        @endforeach
              </select>
            </div>
          </div>

          {{-- Search Form --}}
          <div class="w-full md:w-64">
            <form>
              <label for="default-search" class="sr-only">Search</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                  </svg>
                </div>
                <input type="search" id="default-search" name="search"
                  class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                  placeholder="Search Customer" />
              </div>
            </form>
          </div>
        </div>

        {{-- Referrals Table --}}
        <div class="overflow-x-auto hidden md:flex">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
              <tr>
                @foreach (['Name', 'Phone', 'Requests', 'Total', 'Payment Method', 'Referral Date', 'Acceptance Date', 'Action'] as $header)
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            {{ $header }}
          </th>
        @endforeach
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @for ($i = 0; $i < 5; $i++)
          <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">John Doe</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+1234567890</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Service A, Service B</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$100.00</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Cash</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-09-10</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-09-11</td>
          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <button
            class="px-4 py-2 bg-purple-900 text-xs text-left text-white rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
            View
            </button>
          </td>
          </tr>
        @endfor
            </tbody>
          </table>
        </div>

        {{-- Mobile View --}}
        <div class="mt-4 block md:hidden">
          <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul role="list" class="divide-y divide-gray-200">
              @for ($i = 0; $i < 5; $i++)
          <li>
          <a href="#" class="block hover:bg-gray-50">
            <div class="px-4 py-4 sm:px-6">
            <div class="flex items-center justify-between">
              <p class="text-sm font-medium text-blue-600 truncate">Jane Smith</p>
              <div class="ml-2 flex-shrink-0 flex">
              <p
                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                $150.00
              </p>
              </div>
            </div>
            <div class="mt-2 sm:flex sm:justify-between">
              <div class="sm:flex">
              <p class="flex items-center text-sm text-gray-500">
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path
                  d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>
                +9876543210
              </p>
              </div>
            </div>
            </div>
          </a>
          </li>
        @endfor
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>