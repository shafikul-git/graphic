<style>
    .before,
    .after {
        margin: 0;
    }

    .before figcaption,
    .after figcaption {
        background: #fff;
        border: 1px solid #c0c0c0;
        border-radius: 12px;
        color: #2e3452;
        opacity: 0.8;
        padding: 12px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        line-height: 100%;
    }

    .before figcaption {
        left: 12px;
    }

    .after figcaption {
        right: 12px;
    }
</style>
<div class="">
    <img-comparison-slider
        class=" {{ $ariaClass ? $ariaClass : 'focus:border-none rounded-md shadow-lg shadow-indigo-400 outline-none hover:shadow-sm hover:shadow-gray-600 transition-all duration-500' }} ">
        <figure slot="first" class="before">
            <img slot="first" src="{{ $images->first_image }}" loding="lazy" />
            <figcaption>Before</figcaption>
        </figure>
        <figure slot="second" class="after">
            <img slot="second" src="{{ $images->second_image }}" loding="lazy" />
            <figcaption>After</figcaption>
        </figure>
    </img-comparison-slider>

        {{ $slot }}
</div>
