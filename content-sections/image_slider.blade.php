@if( !empty($section) )
    <div class="hero-section">
        @if( !empty($section['image_slider']) )
        <div class="carousel">
            @foreach($section['image_slider'] as $slide)
            <div class="slide">
                <div class="img-wrap">
                {{ Helper::image($slide['image'], 'full', array('width' => '603', 'height' => '1600')) }}
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
@endif