@if( !empty($section) )
	<section class="banner">
	    <div class="img-wrap">
	    {{ Helper::image($section['hero_image'], 'full', array('width' => '1600', 'height' => '519')) }}
	    </div>
	    <div class="banner-content">
	        <div class="container">
	            <h1>{{ $section['h1_title'] }}</h1>
	        </div>
	    </div>
	</section>
@endif