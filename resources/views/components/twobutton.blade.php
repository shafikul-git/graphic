@props([
    'firstBTNText' => '',
    'firstBTNLink' => '',
    'secondBTNText' => '',
    'secondBTNLink' => '',
])

<div class="my-5 inline-flex gap-4 flex-wrap">
    <a href="{{ $firstBTNLink }}"
        class="py-2 px-5 sm:px-9 text-sm sm:text-base border border-indigo-300 rounded-md shadow-md shadow-gray-500 capitalize hover:bg-gray-900 hover:text-white transition-all duration-150">
        {{ $firstBTNText }}
    </a>
    <a href="{{ $secondBTNLink }}"
        class="py-2 px-5 sm:px-9 text-sm sm:text-base border border-indigo-300 rounded-md shadow-md shadow-gray-500 capitalize hover:bg-gray-900 hover:text-white transition-all duration-150">
        {{ $secondBTNText }}
    </a>
</div>
