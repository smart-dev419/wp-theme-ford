@layout('layouts/master')
@section('content')
<?php while ( have_posts() ) : the_post(); ?>

<main id="main" class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="blog-content">
                <header class="category-header">
                    @if(get_post_type() == 'post')
                        <strong class="title">{{get_field('post_category_header', 'option')}}</strong>
                    @elseif(get_post_type() == 'story')
                        <strong class="title">{{get_field('story_category_header', 'option')}}</strong>
                    @endif
                </header>
                <div class="blog-content-holder">
                    <section id="content">
                        @if(get_post_type() == 'post')
                        <div class="video-holder">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ get_field('youtube_video_id') }}" allowfullscreen></iframe>
                        </div>
                        @elseif(get_post_type() == 'story')
                        <div class="img-frame">
                            {{ Helper::image(get_post_thumbnail_id($post->ID), 'full', array('width' => '720', 'height' => '420')) }}
                        </div>
                        @endif
                        <div class="blog-detail">
                            <div class="heading">
                                <h1>{{ the_title() }}</h1>
                                <div class="meta">
                                    <time datetime="{{ get_the_date('Y-m-d') }}">{{ get_the_date('F j, Y') }} </time> | 
                                    <span class="by">{{ _e( 'By' ) }} 
                                        <a href="{{ get_the_author_link() }}">{{ get_the_author() }}</a>
                                    </span>
                                </div>
                            </div>
                            <div>{{ the_content() }}</div>
                        </div>
                    </section>
                    @include('sidebars/post-sidebar')
                </div>
            </div>
        </div>
    </div>
</main>

@include('partials/footer-panel')

<?php endwhile; ?>
@endsection