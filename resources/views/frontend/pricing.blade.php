@section('title', 'Pricing')
<x-guest-layout>
    <!-- component -->
<section class="bg-gradient-to-r from-purple-900 to-indigo-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-white sm:text-5xl">
          Choose Your Plan
        </h2>
        <p class="mt-4 text-xl text-purple-200">
          Unlock the power of decentralized finance with our cutting-edge solutions.
        </p>
      </div>
  
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Basic Plan -->
        <div class="bg-white bg-opacity-10 rounded-lg shadow-lg p-6 relative overflow-hidden">
          <div class="absolute top-0 right-0 m-4">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
              Basic
            </span>
          </div>
          <div class="mb-8">
            <h3 class="text-2xl font-semibold text-white">Starter Pack</h3>
            <p class="mt-4 text-purple-200">Perfect for individuals and small teams.</p>
          </div>
          <div class="mb-8">
            <span class="text-5xl font-extrabold text-white">$49</span>
            <span class="text-xl font-medium text-purple-200">/mo</span>
          </div>
          <ul class="mb-8 space-y-4 text-purple-200">
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>10 user accounts</span>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>100 transactions per month</span>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Basic reporting</span>
            </li>
          </ul>
          <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
            Get Started
          </a>
        </div>
  
        <!-- Pro Plan -->
        <div class="bg-white bg-opacity-10 rounded-lg shadow-lg p-6 relative overflow-hidden">
          <div class="absolute top-0 right-0 m-4">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
              Pro
            </span>
          </div>
          <div class="mb-8">
            <h3 class="text-2xl font-semibold text-white">Growth Pack</h3>
            <p class="mt-4 text-purple-200">Ideal for growing businesses and enterprises.</p>
          </div>
          <div class="mb-8">
            <span class="text-5xl font-extrabold text-white">$199</span>
            <span class="text-xl font-medium text-purple-200">/mo</span>
          </div>
          <ul class="mb-8 space-y-4 text-purple-200">
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Unlimited user accounts</span>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Unlimited transactions</span>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Advanced analytics</span>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Priority support</span>
            </li>
          </ul>
          <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-green-600 to-teal-600 hover:from-green-700 hover:to-teal-700">
            Get Started
          </a>
        </div>
  
        <!-- Enterprise Plan -->
        <div class="bg-white bg-opacity-10 rounded-lg shadow-lg p-6 relative overflow-hidden">
          <div class="absolute top-0 right-0 m-4">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
              Enterprise
            </span>
          </div>
          <div class="mb-8">
            <h3 class="text-2xl font-semibold text-white">Scale Pack</h3>
            <p class="mt-4 text-purple-200">Tailored for large-scale deployments and custom needs.</p>
          </div>
          <div class="mb-8">
            <span class="text-5xl font-extrabold text-white">Custom</span>
          </div>
          <ul class="mb-8 space-y-4 text-purple-200">
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Dedicated infrastructure</span>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Custom integrations</span>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Dedicated support team</span>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Premium SLAs</span>
            </li>
          </ul>
          <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-yellow-600 to-orange-600 hover:from-yellow-700 hover:to-orange-700">
            Contact Sales
          </a>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>