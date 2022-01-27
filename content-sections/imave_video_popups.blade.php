@if( !empty($section) )
	<div class="module-flyover-block" style="background: url({{ $section['bg_image'] }}) no-repeat 0 0 / cover">
		@if( !empty($section['images_videos']) )
	    <div class="row">
	    	@foreach($section['images_videos'] as $key => $img_video)
	        <div class="col-xs-4 col-md-2">
	            <div class="column-holder">
	                <div class="frame">
	                    <a href="#" class="popup-opener">
	                        <div class="tb">
	                            <div class="tc">
	                                <span class="num">{{ $key+1 }}</span>
	                                <div class="ico-wrap"><span class="icon-play"></span></div>
	                            </div>
	                        </div>
	                    </a>
	                </div>
	                <div class="popup-block">
	                    <a href="#" class="popup-opener icon-close"><span class="sr-only"></span></a>
	                    <div class="popup-container">
	                        <div class="video-wrap">
	                            <div class="video-frame">
	                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $img_video['youtube_video_id'] }}?enablejsapi=1&version=3" allowfullscreen></iframe>
	                            </div>
	                        </div>
	                        <div class="content-holder">
	                            <div class="content-wrap">
	                                {{ Helper::image($img_video['content_image'], 'full', array('width' => '476', 'height' => '673')) }}
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        @endforeach
	    </div>
	    @endif
	</div>
@endif