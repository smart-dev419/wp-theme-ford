<div class="blocks-wrap footer-block-wrap">
    <div class="top-block text-center container">
        @if( get_field('panel_width') != "wide_mode" )
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        @endif   
                @if( get_field('watermark_icon') != "" )
                <div class="watermark">
                    {{ Helper::image(get_field('watermark_icon'), 'full', array('width' => '46', 'height' => '76')) }}
                </div>
                @endif
                <div class="text-holder">
                    <h2>{{ get_field('header') }}</h2>
                    
                    @if( get_field('sub_header') != "" )
                    <span class="highlight-text">{{ get_field('sub_header') }}</span>
                    @endif                 

                    @if( get_field('paragraph_copy') != "" )
                    <p>{{ get_field('paragraph_copy') }}</p>
                    @endif

                    @if( get_field('cta_button_url') != "" && get_field('cta_button_text') != "" )
                    <a href="{{ get_field('cta_button_url') }}" class="btn btn-default">{{ get_field('cta_button_text') }}</a>
                    @endif
                </div>
        @if( get_field('panel_width') != "wide_mode" )        
            </div>
        </div>
        @endif
    </div>
</div>