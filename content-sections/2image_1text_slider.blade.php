@if( !empty($section) )
    <section class="intro-block text-center carousel-holder">
        @if( !empty($section['image_slider']) )
        <div class="carousel">
            @foreach($section['image_slider'] as $slide)
            <div class="slide">
                <div class="slide-img" style="background: url({{ $slide['image'] }}) no-repeat 50% 0 / cover">
            </div>
            </div>
            @endforeach
        </div>
        @endif
        <div class="carousel-article">
            <article class="article">
                @if( $section['watermark_icon'] != "" )
                <div class="watermark">
                    {{ Helper::image($section['watermark_icon'], 'full', array('width' => '37', 'height' => '61')) }}
                </div>
                @endif
                <h3>{{ $section['header'] }}</h3>
                <div class="content-wrap">
                    <div class="text-holder">
                        @if( $section['paragraph_copy'] != "" )
                            <p>{{ $section['paragraph_copy'] }}</p>
                        @endif
                    </div>
                    @if( $section['cta_button_url'] != "" && $section['cta_button_text'] != "" )
                    <a href="{{ $section['cta_button_url'] }}" class="btn btn-default">{{ $section['cta_button_text'] }}</a>
                    @endif
                </div>
            </article>
        </div>
    </section>
@endif