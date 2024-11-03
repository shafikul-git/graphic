@vite(['resources/css/app.css'])
@section('title', 'Home')
<x-GuestLayout>

<x-hero-slider/>


{{-- <x-before-after beforeAfterKey="before_after_1"/> --}}

<div class="md:mx-[2rem] lg:mx-[5rem] xl:mx-[7rem] mx-[0.2rem]">
    @include('frontend.valuePropositions')

    @include('frontend.serviceOverView')

    @include('frontend.editingProces')
</div>
</x-GuestLayout>
