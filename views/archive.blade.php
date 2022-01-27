@layout('layouts/master')
@section('content')

<main id="main" class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="blog-content">
                <header class="category-header">
                    <h1>{{ the_archive_title() }}</h1>
                    @if(get_post_type() == 'post')
                        <strong class="title">{{get_field('post_category_header', 'option')}}</strong>
                    @elseif(get_post_type() == 'story')
                        <strong class="title">{{get_field('story_category_header', 'option')}}</strong>
                    @endif
                </header>

                <div class="content-holder">
                    <div class="post-items row">
                    <?php while ( have_posts() ) : the_post(); ?>
                        @include('partials/post-item')
                    <?php endwhile; ?>     
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection
    