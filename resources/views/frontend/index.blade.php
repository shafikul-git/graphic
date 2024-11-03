@section('title', 'Home')
<x-GuestLayout>

<x-hero-slider/>

@include('frontend.valuePropositions')

<x-before-after beforeAfterKey="before_after_1"/>
<x-before-after beforeAfterKey="before_after_4"/>
<x-before-after beforeAfterKey="before_after_5"/>

</x-GuestLayout>
