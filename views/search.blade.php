@layout('layouts/master')
@section('content')

<main id="main" class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="blog-content">
                <header class="category-header">
                    <strong class="title">{{ _e( 'Search' ) }}</strong>
                    <?php if ( have_posts() ) : ?>
                        <span class="result-text">{{ _e( 'Search Results for' ) }}: "{{ get_search_query() }}"</span>
                    <?php else : ?>
                        <span class="result-text">{{ _e( 'No results found. Please try your search again.' ) }}</span>
                    <?php endif; ?>
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
    