<div class="text-center my-6 mt-8">
    <h2 class="capitalize font-extrabold headingFontStyle text-center text-[1rem] md:text-[3rem] mb-2">Key Benefits of Our Photo Editing Services    </h2>
    <p class="paragrapeFontStyle mb-6 text-center">
        We differentiate ourselves from other image editing companies with our unique approach to split the editing process into objective and subjective steps.
    </p>
</div>
<div class="grid grid-cols-5 ">
    <div class="col-span-3">
        <div class="font-[sans-serif] divide-y rounded-lg max-w-7xl mx-auto px-4 ">


            <!-- Accordion Item 2 -->
            <div role="accordion" class="accordion bg-white shadow-md shadow-gray-400 px-4 rounded-md my-3 hover:bg-gray-100 transition-all duration-500">
                <button type="button" class="accordion-button w-full text-base text-left font-semibold py-6 text-gray-800 flex items-center"
                    onclick="toggleAccordion(this, '{{ url('frontend/assets/images/contact-bg.jpeg') }}')">
                    <span class="mr-4">What are the dates and locations for the product launch events?</span>
                    <ion-icon name="add" class="w-6 h-6 ml-auto icon-toggle"></ion-icon>
                </button>
                <div class="accordion-content max-h-0 overflow-hidden transition-[max-height] duration-500 ease-out">
                    <p class="text-sm text-gray-800 py-4">Content for second accordion item.</p>
                </div>
            </div>



            <!-- Accordion Item 2 -->
            <div role="accordion" class="accordion bg-white shadow-md shadow-gray-400 px-4 rounded-md my-3 hover:bg-gray-100 transition-all duration-500">
                <button type="button" class="accordion-button w-full text-base text-left font-semibold py-6 text-gray-800 flex items-center"
                    onclick="toggleAccordion(this, '{{ url('frontend/assets/images/bedroom.png') }}')">
                    <span class="mr-4">What are the dates and locations for the product launch events?</span>
                    <ion-icon name="add" class="w-6 h-6 ml-auto icon-toggle"></ion-icon>
                </button>
                <div class="accordion-content max-h-0 overflow-hidden transition-[max-height] duration-500 ease-out">
                    <p class="text-sm text-gray-800 py-4">Content for second accordion item.</p>
                </div>
            </div>


        </div>
    </div>

    <div class="col-span-2 flex justify-center items-center">
        <div class="">
            <img id="accordionImage" src="https://clippingpathstudio.com/wp-content/uploads/2022/08/photo-retouching-after-6-400x284.jpg" alt="" onload="this.style.opacity = 1; this.style.transform = 'translateY(0)';">

        </div>
    </div>
</div>


<script>
    function toggleAccordion(button, imageUrl) {
        // Close all other accordion content
        document.querySelectorAll('.accordion-content').forEach(content => {
            if (content !== button.nextElementSibling) {
                content.style.maxHeight = null;
                content.classList.remove('open');
                content.previousElementSibling.querySelector('.icon-toggle').name = 'add';
            }
        });

        // Toggle the clicked accordion content
        const content = button.nextElementSibling;
        if (content.classList.contains('open')) {
            content.style.maxHeight = null;
            content.classList.remove('open');
            button.querySelector('.icon-toggle').name = 'add';
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            content.classList.add('open');
            button.querySelector('.icon-toggle').name = 'remove';
        }

        const image = document.getElementById('accordionImage');
    image.style.opacity = 0;
    image.style.transform = 'translateY(-20px)';
    setTimeout(() => {
        image.src = imageUrl;
        image.style.opacity = 1;
        image.style.transform = 'translateY(0)';
    }, 500);
    }
</script>
<style>
    #accordionImage {
    opacity: 0;
    transform: translateY(-20px);
    transition: opacity 0.5s ease, transform 0.5s ease;
}

</style>
