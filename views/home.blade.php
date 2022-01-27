@layout('layouts/master')
<?php /* Template Name: Home */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>

@include('partials/content-sections')

<div class="discovery-blocks">
    <div class="col">
        @if(!empty(array_slice(get_field('tiles'), 0, 2)))
        <div class="images-holder">
            @foreach(array_slice(get_field('tiles'), 0, 2) as $key => $tile)
            <div class="img-wrap style-{{ $key+1 }}">
                <a href="{{ $tile['detail_link'] }}">
                    <picture>
                        <source srcset="{{ $tile['mobile_image'] }}" media="(max-width: 767px)">
                        <source srcset="{{ $tile['image'] }}">
                        <img src="{{ $tile['image'] }}">
                    </picture>
                    <div class="content-wrap">
                        <div class="content-frame">
                            @if( $tile['logo'] != "" )
                            <div class="ico-wrap">
                                {{ Helper::image($tile['logo'], 'full', array('width' => $tile['logo_width'])) }}
                            </div>
                            @endif
                            <strong class="title">{{ $tile['title'] }}</strong>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif

        @if(!empty(array_slice(get_field('tiles'), 2, 1)))
        @foreach(array_slice(get_field('tiles'), 2, 1) as $key => $tile)
        <div class="img-wrap">
            <a href="{{ $tile['detail_link'] }}">
                <picture>
                    <source srcset="{{ $tile['mobile_image'] }}" media="(max-width: 767px)">
                    <source srcset="{{ $tile['image'] }}">
                    <img src="{{ $tile['image'] }}">
                </picture>
                <div class="content-wrap">
                    <div class="content-frame">
                        @if( $tile['logo'] != "" )
                        <div class="ico-wrap">
                            {{ Helper::image($tile['logo'], 'full', array('width' => $tile['logo_width'])) }}
                        </div>
                        @endif
                        <strong class="title">{{ $tile['title'] }}</strong>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @endif
    </div>

    @if(!empty(array_slice(get_field('tiles'), 3, 2)))
    <div class="col center">
        @foreach(array_slice(get_field('tiles'), 3, 2) as $key => $tile)
        <div class="img-wrap">
            <a href="{{ $tile['detail_link'] }}">
                <picture>
                    <source srcset="{{ $tile['mobile_image'] }}" media="(max-width: 767px)">
                    <source srcset="{{ $tile['image'] }}">
                    <img src="{{ $tile['image'] }}">
                </picture>
                <div class="content-wrap">
                    <div class="content-frame">
                        @if( $tile['logo'] != "" )
                        <div class="ico-wrap">
                            {{ Helper::image($tile['logo'], 'full', array('width' => $tile['logo_width'])) }}
                        </div>
                        @endif
                        <strong class="title">{{ $tile['title'] }}</strong>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @endif

    <div class="col">
        @if(!empty(array_slice(get_field('tiles'), 5, 1)))
        @foreach(array_slice(get_field('tiles'), 5, 1) as $key => $tile)
        <div class="img-wrap">
            <a href="{{ $tile['detail_link'] }}">
                <picture>
                    <source srcset="{{ $tile['mobile_image'] }}" media="(max-width: 767px)">
                    <source srcset="{{ $tile['image'] }}">
                    <img src="{{ $tile['image'] }}">
                </picture>
                <div class="content-wrap">
                    <div class="content-frame">
                        @if( $tile['logo'] != "" )
                        <div class="ico-wrap">
                            <div class="ico-frame">
                                {{ Helper::image($tile['logo'], 'full', array('width' => $tile['logo_width'])) }}
                            </div>
                        </div>
                        @endif
                        <span class="txt-icon">{{ $tile['title'] }}</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @endif
        
        @if(!empty(array_slice(get_field('tiles'), 6, 2)))
        <div class="images-holder">
            @foreach(array_slice(get_field('tiles'), 6, 2) as $key => $tile)
            <div class="img-wrap style-{{ $key+1 }}">
                <a href="{{ $tile['detail_link'] }}">
                    <picture>
                        <source srcset="{{ $tile['mobile_image'] }}" media="(max-width: 767px)">
                        <source srcset="{{ $tile['image'] }}">
                        <img src="{{ $tile['image'] }}">
                    </picture>
                    <div class="content-wrap">
                        <div class="content-frame">
                            @if( $tile['logo'] != "" )
                            <div class="ico-wrap">
                                {{ Helper::image($tile['logo'], 'full', array('width' => $tile['logo_width'])) }}
                            </div>
                            @endif
                            <strong class="title">{{ $tile['title'] }}</strong>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div><!-- .discovery-blocks -->

<?php endwhile; ?>
@endsection
    