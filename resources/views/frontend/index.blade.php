@vite(['resources/css/app.css'])
@section('title', 'Home')
<x-GuestLayout>

<x-hero-slider/>


{{-- <x-before-after beforeAfterKey="before_after_1"/> --}}

<div class="md:mx-[1rem] lg:mx-[3rem] xl:mx-[5rem] mx-[0.2rem]">
    
    @include('frontend.valuePropositions') 
    
    @include('frontend.freetrial')

    @include('frontend.serviceOverView')

    @include('components.serviceFAQ')

    {{-- @include('frontend.editingProces') --}}

    @include('frontend.whyOutsourceing')

    @include('frontend.categorys')

    @include('frontend.FAQ')

</div>
</x-GuestLayout>
