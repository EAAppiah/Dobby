<x-layout>
  <x-slot:heading>
    Referral Page
  </x-slot:heading>

  <div class="bg-gray-50 min-h-screen">
    <form autocomplete="off" class="p-6 px-4 md:px-8 md:py-4 mb-6 overflow-y-auto">
      <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
        <div class="text-gray-600 text-center">
          <h3 class="font-semibold text-xl text-purple-900">
            Elvis Appiah
          </h3>
          <p class="font-semibold text-lg text-black">
            1st Bawaleshie St, East Legoon
          </p>
          <p>0557733032</p>
        </div>

        <div class="lg:col-span-2 gap-y-2">
          <div class="grid gap-4 text-sm grid-cols-1 md:grid-cols-7">
            <!-- REFERRER NAME -->
            <div class="md:col-span-3">
              <label for="referrer" class="text-gray-700">Referrer Name</label>
              <select name="referrer" id="referrer"
                class="h-10 flex border border-gray-200 rounded items-center w-full mt-1">
                <option value="" disabled selected>Select Referrer</option>
                <option value="1">John Doe</option>
                <option value="2">Jane Smith</option>
                <option value="3">Rick Johnson</option>
              </select>
            </div>

            <!-- REFERRER PHONE -->
            <div class="md:col-span-3">
              <label for="referrer-phone" class="text-gray-700">Referrer Number</label>
              <input name="referrer-phone" id="referrer-phone" placeholder="020 389-5304"
                class="h-10 w-full flex border border-gray-200 rounded items-center mt-1 px-4" type="tel" required />
            </div>

            <!-- CLIENT NAME -->
            <div class="md:col-span-3">
              <label for="full_name" class="text-gray-700">Client Name</label>
              <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full"
                placeholder="Enter Customer Name" required />
            </div>

            <!-- CLIENT NUMBER -->
            <div class="md:col-span-2">
              <label for="phone" class="text-gray-700">Client Phone Number</label>
              <input type="tel" name="phone" id="phone" class="h-10 border mt-1 rounded px-4 w-full"
                placeholder="0203895304" required />
            </div>

            <!-- ADDRESS -->
            <div class="md:col-span-2">
              <label for="address" class="text-gray-700">Residence / Address</label>
              <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full"
                placeholder="1st Bawaleshie St, Accra Gh" required />
            </div>

            <!-- PAYMENT METHOD -->
            <div class="md:col-span-2">
              <label for="payment_method" class="text-gray-700">Payment Method</label>
              <select id="payment_method" name="payment_method"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="Cash">Cash</option>
                <option value="Insurance">Insurance</option>
              </select>

              <!-- INSURANCE NAME  -->
              <div id="insurance-fields" class="flex gap-x-4" style="display: none;">
                <div>
                  <label for="insurance_name" class="text-gray-700">Insurance/Organization</label>
                  <select id="insurance_name" name="insurance_name"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="1">National Health Insurance</option>
                    <option value="2">Private Health Insurance Co.</option>
                    <option value="3">Corporate Insurance Ltd.</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div>
                  <label for="insuranceNumber" class="text-gray-700">Insurance Number</label>
                  <input name="insuranceNumber" id="insuranceNumber" class="h-10 border mt-1 rounded px-4 w-full"
                    placeholder="10658415" />
                </div>
              </div>
            </div>

            <!-- FACILITY -->
            <div class="md:col-span-2">
              <label for="facility" class="text-gray-700">Facility</label>
              <input type="text" id="facility-search" placeholder="Search facilities"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
              <select id="facility" name="facility"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="1">General Hospital</option>
                <option value="2">City Clinic</option>
                <option value="3">Community Health Center</option>
              </select>
            </div>

            <!-- REQUESTS -->
            <div class="md:col-span-3">
              <label for="requests" class="text-gray-700">Request</label>
              <div class="flex gap-x-4 items-center">
                <div class="relative w-full md:w-96 mt-1">
                  <input type="text" id="request-search" placeholder="Search requests..."
                    class="w-full p-2 border border-gray-300 rounded-md mb-2" />
                  <div id="selected-requests"
                    class="flex items-center justify-between bg-white rounded-md border border-gray-300 py-2 px-3 cursor-pointer">
                    <span class="text-gray-400 truncate">Select requests</span>
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div id="request-dropdown"
                    class="hidden absolute z-10 mt-2 w-full bg-white rounded-md shadow-lg max-h-52 overflow-y-auto">
                    <div class="px-3 py-2">
                      <input id="service-1" name="services[]" value="1" type="checkbox" class="service-checkbox" />
                      <label for="service-1" class="ml-2 text-gray-700">
                        General Consultation
                        <span class="cash-price">(GHS 50.00)</span>
                      </label>
                    </div>
                    <div class="px-3 py-2">
                      <input id="service-2" name="services[]" value="2" type="checkbox" class="service-checkbox" />
                      <label for="service-2" class="ml-2 text-gray-700">
                        Blood Test
                        <span class="cash-price">(GHS 100.00)</span>
                      </label>
                    </div>
                    <div class="px-3 py-2">
                      <input id="service-3" name="services[]" value="3" type="checkbox" class="service-checkbox" />
                      <label for="service-3" class="ml-2 text-gray-700">
                        X-Ray
                        <span class="cash-price">(GHS 150.00)</span>
                      </label>
                    </div>
                    <div class="sticky bottom-0 bg-white py-2 px-3 border-t border-gray-300 text-center">
                      <button type="button" id="done-selecting"
                        class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
                        Done
                      </button>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- NOTES -->
            <div class="md:col-span-3">
              <label class="text-gray-700" for="notes">Notes</label>
              <div class="">
                <textarea class="form-textarea rounded block border w-96 p-2 text-md text-gray-700" id="notes"
                  name="notes" rows="5"></textarea>
              </div>
            </div>

            <!-- TABLETS AND LAPTOPS TOTAL & SUBMIT -->
            <div class="hidden md:flex">
              <div class="flex gap-x-12 items-end">
                <div class="mt-4">
                  <label for="total" class="font-bold text-lg text-accent">Total Cost</label>
                  <div
                    class="h-10 w-32 bg-white flex border border-gray-400 text-black rounded items-center mt-1 relative">
                    <span class="absolute left-3 text-purple-800 font-semibold">GHS</span>
                    <input name="total" id="total" placeholder="0"
                      class="px-2 text-center appearance-none outline-none w-full bg-white" readonly />
                  </div>
                </div>

                <div class="mt-8">
                  <button type="submit"
                    class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-3 px-5 rounded">
                    Submit
                  </button>
                </div>
              </div>
            </div>

            <!-- MOBILE TOTAL & SUBMIT -->
            <div class="md:hidden">
              <div class="flex justify-between">
                <div>
                  <label for="total_cost" class="font-bold text-lg text-accent mt-2">Total Cost</label>
                  <div class="h-10 w-32 bg-gray-50 flex border border-gray-200 rounded items-center mt-1 relative">
                    <span class="absolute left-3 text-accent text-md">GHS</span>
                    <input name="total_cost" id="total_cost" placeholder="0"
                      class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                      readonly />
                  </div>
                </div>

                <!-- SUBMIT -->
                <div class="mt-6">
                  <button type="submit"
                    class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-3 px-5 rounded">
                    Submit
                  </button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </form>
  </div>
</x-layout>