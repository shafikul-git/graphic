@props([
    'buttonText',
    'roundClass' => '',
    'link' => '#_',
    'linkClass' => ''
])
<div class="{{ $roundClass ? $roundClass : '' }} flex  w-full h-full button" {{ $attributes }}>
    <a href="{{ $link }}" class="relative {{ $linkClass ? $linkClass : 'px-5 py-2' }} font-medium text-white group">
        <span
            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-purple-500 group-hover:bg-purple-700 group-hover:skew-x-12"></span>
        <span
            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-purple-700 group-hover:bg-purple-500 group-hover:-skew-x-12"></span>

        <span
            class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-purple-600 -rotate-12"></span>
        <span
            class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-purple-400 -rotate-12"></span>
        <span class="relative">{{ $buttonText }}</span>
    </a>
</div>
