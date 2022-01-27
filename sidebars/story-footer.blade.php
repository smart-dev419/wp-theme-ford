<div class="purchase-post">
	<div class="img-wrap">
		{{ Helper::image(get_field('story_side_image', 'option'), 'full', array('width' => '248', 'height' => '172')) }}
	</div>
	<div class="btn-holder">
		<a href="{{get_field('story_side_cta_button_url', 'option')}}" class="btn">{{get_field('story_side_cta_button_label', 'option')}}</a>
	</div>
</div>