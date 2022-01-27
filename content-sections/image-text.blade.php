<div class="img-wrap" style="background: url({{ $section['image'] }}) no-repeat 50% 0 / cover"></div>
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
