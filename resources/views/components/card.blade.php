
@props([
    'image' => '',
    'heading' => '',
    'description' => '',
])

<article
    class="my-5 !mx-5 hover:animate-background rounded-xl bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 p-0.5 shadow-xl transition hover:bg-[length:400%_400%] hover:shadow-sm hover:[animation-duration:_4s]">
    <div class="rounded-[10px] bg-white p-4 h-full sm:p-6 text-center flex flex-col justify-center">
        <div class="flex justify-center">
            <img src="{{ $image }}" alt="" class="w-[9rem] h-[9rem]">
        </div>
        <a href="#">
            <h3 class="mt-0.5 text-lg font-medium text-gray-900 headingFontStyle">
                {{ $heading }}
            </h3>
        </a>

        <div class="mt-4 flex flex-wrap gap-1 paragrapeFontStyle">
            <p>{{ $description }}</p>
        </div>
    </div>
</article>
