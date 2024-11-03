@section('title', 'Home')
<x-GuestLayout>
    <!-- !banner -->
    <x-frontend.heroSlider />
    <!--todo Title Categories  -->
    <x-frontend.todoList />

    <!--? Products and categories  -->
    <section class="w-full min-h-auto px-8 lg:px-0 lg:w-5/6 mx-auto mt-16 flex gap-8">
        <aside class="sticky top-0 hidden lg:flex flex-col lg:w-1/4 max-h-screen">
            <div class="aside_section overflow-y-auto">
                @push('todoMobileMenu')
                    <x-frontend.category />
                    <x-frontend.customSelect.price />
                    <x-frontend.customSelect.brand />
                    <x-frontend.customSelect.size />
                    <x-frontend.customSelect.colour />
                    <x-frontend.customSelect.customCode />
                    <x-frontend.bestSeller />
                @endpush

                <x-frontend.category />
                <x-frontend.customSelect.price />
                <x-frontend.customSelect.brand />
                <x-frontend.customSelect.size />
                <x-frontend.customSelect.colour />
                <x-frontend.customSelect.customCode />
                <x-frontend.bestSeller />
            </div>
        </aside>

        <div class="products w-full lg:w-3/4 flex flex-col">
            <!-- Top Trending & New Arriavls Produts  -->
            <x-frontend.topTrendingProduct />

            <!-- Current Day Deal Produt -->
            <x-frontend.dealOfDay />

            <!-- New Produts  -->
            <x-frontend.newProducts />
        </div>
    </section>

    <div
        class="mt-10 w-full px-8 lg:px-0 lg:w-5/6 mx-auto flex flex-wrap lg:flex-nowrap flex-col lg:flex-row gap-8 mb-20">

        <!-- Testimonial  -->
        <x-frontend.testimonial />

        <!-- Discound Offer Vacation Banner -->
        <x-frontend.discountOffer />

        <!-- Our Service Deails -->
        <x-frontend.ourService />
    </div>

    <x-frontend.blog />
</x-GuestLayout>
