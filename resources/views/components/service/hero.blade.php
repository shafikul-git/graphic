@vite(['resources/css/app.css'])

<div id="heroSectionBgChange"
    class="md:mb-[3rem] grid md:grid-cols-2 grid-cols-1 order-2 md:order-1 md:gap-[5rem] gap-3 p-[1rem] md:p-0 rounded-md">
    <div class="relative w-full ">
        <img id="originalImage" src="{{ url('frontend/others/photo-retouching.jpg') }}" alt=""
            class="w-full h-full object-cover md:hidden">
        <div class="absolute bottom-0 w-full flex justify-center mb-4">
            <div class="flex gap-8">
                <x-animatedbutton onclick="changeImageOriginal()" buttonText="Original"
                    linkClass="py-[0.2rem] px-2 md:py-2 md:px-5" />
                <x-animatedbutton onclick="changeImageWork()" buttonText="Work"
                    linkClass="py-[0.2rem] px-2 md:py-2 md:px-5" />
            </div>
        </div>
    </div>
    <div class="order-1 md:order-2 md:py-[3rem] lg:py-[5rem] xl:py-[8rem] xl:pr-[5rem] 2xl:py-[13rem] md:pr-[1rem]">
        <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2">
            High-end photo retouching
        </h3>
        <p class="font-normal livvicFontFamily text-sm md:text-xl lg:text-2xl">
            Our experts guarantee extraordinary modifications using professional techniques to improve the quality
            and overall look of every high-end photo.
        </p>
        <x-twobutton firstBTNText="try for free" firstBTNLink="#" secondBTNText="try for free" secondBTNLink="#"/>
    </div>
</div>

<style>
    #heroSectionBgChange {
        background-image: url("{{ url('frontend/others/photo-retouching.jpg') }}");
        background-size: cover;
        background-position: center;
    }
    @media (max-width: 768px) {
    #heroSectionBgChange {
        background-image: none;
    }
}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroSectionBgChange = document.getElementById('heroSectionBgChange');
        const originalImage = document.getElementById('originalImage');

        const photoRetouchingImage = "{{ url('frontend/others/photo-retouching.jpg') }}";
        const backdropImageUrl = "{{ url('frontend/others/backdrop.jpg') }}";

        function changeImageOriginal() {
            if (window.innerWidth >= 768) {
                heroSectionBgChange.style.backgroundImage = `url(${photoRetouchingImage})`;
            }
            originalImage.src = photoRetouchingImage;
            console.log("Displaying Original:", photoRetouchingImage);
        }

        function changeImageWork() {
            if (window.innerWidth >= 768) {
                heroSectionBgChange.style.backgroundImage = `url(${backdropImageUrl})`;
            }
            originalImage.src = backdropImageUrl;
            console.log("Displaying Retouched:", backdropImageUrl);
        }

        window.changeImageOriginal = changeImageOriginal;
        window.changeImageWork = changeImageWork;
    });
</script>
