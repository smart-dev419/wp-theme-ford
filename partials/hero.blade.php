<section class="banner">
    <div class="img-wrap">
        {{ Helper::image(get_field('hero_image'), 'full', array('width' => '1600', 'height' => '520')) }}
    </div>
    <div class="banner-content">
        <div class="container">
            <h1>{{ get_field('h1_title') }}</h1>
        </div>
    </div>
</section>