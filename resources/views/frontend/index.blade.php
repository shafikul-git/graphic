@vite(['resources/css/app.css'])
@section('title', 'Home')
<x-GuestLayout>

<x-hero-slider/>


{{-- <x-before-after beforeAfterKey="before_after_1"/> --}}

<div class="md:mx-[1rem] lg:mx-[3rem] xl:mx-[5rem] mx-[0.2rem]">
    
    @include('frontend.valuePropositions') 
    
    <div class="grid grid-cols-1 md:grid-cols-3 bg-indigo-50 my-6 rounded-md">
        <div class="col-span-2 livvicFontFamily flex justify-center items-center rounded-md"
            style="background-size: cover;  background-image: url('https://helpx-prod.scene7.com/is/image/HelpxProdLoc/exposure-adjustments-PSE?$pjpeg$&jpegSize=200&wid=1200')">
            <div class="p-[2rem] md:p-[4rem] lg:p-[7rem] bg-[#00000086]">
                <h2 class="font-extrabold text-[3rem] md:text-[5rem] capitalize text-white">try for free</h2>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ipsa explicabo quidem
                    itaque quo optio
                    alias
                    deleniti? Nesciunt, accusamus? Porro?</p>
            </div>
        </div>
        <div class="">
            <div class="flex items-center justify-center">
                <div class="mx-auto w-full max-w-[550px] bg-transparent">
                    <x-freeTrial/>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.serviceOverView')

    <h2 class="capitalize font-bold text-center mt-[6rem] text-sm md:text-xl lg:text-2xl">Our Working step</h2>

    @include('components.woringStep')

    {{-- @include('frontend.editingProces') --}}

    @include('frontend.whyOutsourceing')

    @include('frontend.categorys')

    @include('frontend.FAQ')

</div>
</x-GuestLayout>
