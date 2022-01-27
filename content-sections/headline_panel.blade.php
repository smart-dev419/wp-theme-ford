@if( !empty($section) )
    <article class="{{$top_block_class}} container">
        @if( $section['panel_width'] != "wide_mode" )
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        @endif    
                @if( $section['watermark_icon'] != "" )
                <div class="watermark">
                    {{ Helper::image($section['watermark_icon'], 'full', array('width' => '46', 'height' => '76')) }}
                </div>
                @endif
                <div class="text-holder">
                    <h2>{{ $section['header'] }}</h2>

                    @if( $section['sub_header'] != "" )
                    <span class="highlight-text">{{ $section['sub_header'] }}</span>
                    @endif
                    
                    @if( $section['paragraph_copy'] != "" )
                    <p>{{ $section['paragraph_copy'] }}</p>
                    @endif
                    
                    @if( $section['cta_button_url'] != "" && $section['cta_button_text'] != "" )
                    <a href="{{ $section['cta_button_url'] }}" class="btn btn-default">{{ $section['cta_button_text'] }}</a>
                    @endif
                </div>
        @if( $section['panel_width'] != "wide_mode" )   
            </div>
        </div>
        @endif
    </article>
@endif    