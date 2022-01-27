@if( !empty($section) )    
    <section class="intro-block text-center">
        <div class="img-wrap" style="background: url({{ $section['image'] }}) no-repeat 0 0 / cover"></div>
        <article class="article">
            @if( $section['watermark_icon'] != "" )
            <div class="watermark">
                {{ Helper::image($section['watermark_icon'], 'full', array('width' => '37', 'height' => '61')) }}
            </div>
            @endif
            <div class="content-wrap">
                <div class="text-holder ">
                    <h3>{{ $section['header'] }}</h3>
                    @if( $section['paragraph_copy'] != "" )
                    <p>{{ $section['paragraph_copy'] }}</p>
                    @endif
                </div>
                @if( $section['cta_button_url'] != "" && $section['cta_button_text'] != "" )
                <a href="{{ $section['cta_button_url'] }}" class="btn btn-default">{{ $section['cta_button_text'] }}</a>
                @endif
            </div>
            @if( !empty($section['logos']) )
            <ul class="logos-list">
                @foreach($section['logos'] as $logo)
                <li>
                    <a href="{{ $logo['logo_link'] }}" target="_blank">
                        {{ Helper::image($logo['logo_image'], 'full', array('width' => $logo['logo_width'])) }}
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </article>
    </section>
@endif