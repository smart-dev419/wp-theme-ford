@if( !empty($section) )
	<section class="intro-block text-center three-cols">
	    <article class="article block">
	        <div class="article-wrap">
		        @if( $section['left_watermark_icon'] != "" )
		        <div class="watermark">
		            {{ Helper::image($section['left_watermark_icon'], 'full', array('width' => '37', 'height' => '61')) }}
		        </div>
		        @endif
	            <h3>{{ $section['left_header'] }}</h3>
	            <div class="content-wrap">
	                <div class="text-holder">
	                    @if( $section['left_paragraph_copy'] != "" )
	                    <p>{{ $section['left_paragraph_copy'] }}</p>
	                    @endif
	                </div>
	                @if( $section['left_cta_button_url'] != "" && $section['left_cta_button_text'] != "" )
	                <a href="{{ $section['left_cta_button_url'] }}" class="btn btn-default">{{ $section['left_cta_button_text'] }}</a>
	                @endif
	            </div>
	        </div>
	    </article>
	    <div class="img-wrap block-center" style="background: url({{ $section['image'] }}) no-repeat 50% 50% / cover">
	    </div>
	    <article class="article block">
	        <div class="article-wrap">
		        @if( $section['right_watermark_icon'] != "" )
		        <div class="watermark">
		            {{ Helper::image($section['right_watermark_icon'], 'full', array('width' => '37', 'height' => '61')) }}
		        </div>
		        @endif
	            <h3>{{ $section['right_header'] }}</h3>
	            <div class="content-wrap">
	                <div class="text-holder">
	                    @if( $section['right_paragraph_copy'] != "" )
	                    <p>{{ $section['right_paragraph_copy'] }}</p>
	                    @endif
	                </div>
	                @if( $section['right_cta_button_url'] != "" && $section['right_cta_button_text'] != "" )
	                <a href="{{ $section['right_cta_button_url'] }}" class="btn btn-default">{{ $section['right_cta_button_text'] }}</a>
	                @endif
	            </div>
	        </div>
	    </article>
	</section>
@endif