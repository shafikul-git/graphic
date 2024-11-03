@vite(['resources/css/app.css'])
@section('title', 'Home')
<x-GuestLayout>

<x-hero-slider/>

@include('frontend.valuePropositions')

{{-- <x-before-after beforeAfterKey="before_after_1"/> --}}

@include('frontend.serviceOverView')
</x-GuestLayout>
