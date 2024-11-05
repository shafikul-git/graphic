@section('title', 'All Service')
@extends('layouts.servicePageLayout')

@section('services')
    <div class="livvicFontFamily  mx-5 text-center py-[4rem] md:mx-[6rem] ">
        <h2 class=" font-extrabold text-xl md:text-4xl xl:text-6xl">Our All Service Here</h2>
    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum inventore quasi labore perferendis aliquam ex at, explicabo provident molestias nobis vitae reiciendis sapiente, tempora suscipit non est consequatur, facilis praesentium.</p>
    </div>
    

<div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
    <div>
        <x-before-after beforeAfterKey="before_after_1" class="h-auto max-w-full rounded-lg"> 
            <div class="mt-4">
                <h3 class="text-xl font-bold livvicFontFamily capitalize">newborn photo editing service</h3>
                <p class="livvicFontFamily mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, eum omnis. At voluptate dolorem a, officia quae repellat veniam id sint. Laudantium voluptas asperiores saepe aliquid quidem. Vero, porro dicta.</p>
                <x-animatedbutton link="{{ route('home') }}" buttonText="Free Trial" roundClass="items-center justify-center"/>
            </div>
        </x-before-after>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_2" class="h-auto max-w-full rounded-lg">
            <div class="my-4">
                <h3 class="text-xl font-bold livvicFontFamily capitalize">newborn photo editing service</h3>
                <p class="livvicFontFamily mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, eum omnis. At voluptate dolorem a, officia quae repellat veniam id sint. Laudantium voluptas asperiores saepe aliquid quidem. Vero, porro dicta.</p>
                <x-animatedbutton buttonText="Free Trial"/>  
            </div>
        </x-before-after>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_3" class="h-auto max-w-full rounded-lg"/>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_4" class="h-auto max-w-full rounded-lg"/>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_5" class="h-auto max-w-full rounded-lg"/>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_6" class="h-auto max-w-full rounded-lg"/>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_7" class="h-auto max-w-full rounded-lg"/>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_8" class="h-auto max-w-full rounded-lg"/>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_9" class="h-auto max-w-full rounded-lg"/>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_1" class="h-auto max-w-full rounded-lg"/>
    </div>
    <div>
        <x-before-after beforeAfterKey="before_after_1" class="h-auto max-w-full rounded-lg"/>
    </div>
    
</div>

{{-- Try For Free Form --}}
<div class="grid grid-cols-1 md:grid-cols-2 my-[4rem] rounded-md bg-[#ff5c33af]">
    <div class="flex items-center justify-center">
        <div class="text-center md:text-start pt-[1rem] md:pt-0">
            <p class="font-normal livvicFontFamily text-sm  my-2 uppercase">
                Package
            </p>
            <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2 uppercase">
                Try For Free
            </h3>
            <ul class="text-start">
                <li>Fast, high-quality photo editing</li>
                <li>Receive your edited image within 24 hours</li>
                <li>24/7 customer support you can rely on</li>
            </ul>
        </div>
    </div>
    <div class="">
        <x-freeTrial />
    </div>
</div>

@endsection