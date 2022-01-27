@layout('layouts/master')
<?php /* Template Name: My Ford Stories */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>

@include('partials/content-sections')

<main id="main" class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="blog-content">
                <header class="category-header">
                    <strong class="title">{{get_field('story_category_header', 'option')}}</strong>
                    <?php  $categories = get_terms( 'story_categories', array('hide_empty' => false) ); ?>
                    @include('partials/categories')
                </header>

                <div class="content-holder">
                    <div class="post-items row">
                    <?php
                        $options = array(
                            'post_type' => 'story',
                            'posts_per_page' => 9,
                            'post_status' => 'publish'
                        );
                        if (isset($_GET['category'])) {
                            $options['tax_query'] = array(
                                            array(
                                                'taxonomy' => 'story_categories',
                                                'terms' => $_GET['category'],
                                                'field' => 'term_id'
                                            )
                                        );
                        }

                        Helper::pagination_options($options);

                        $articles = new WP_Query( $options );
                        while( $articles->have_posts() ) : $articles->the_post();
                    ?>
                        @include('partials/post-item')
                    <?php
                         endwhile;
                         wp_reset_query();
                     ?>     
                    </div>

                    <?php $pagination = Helper::pagination($articles, home_url('/my-ford-stories')); ?>
                    @include('partials/pagination')
                </div>
            </div>
        </div>
    </div>
</main>

@include('partials/footer-panel')

<?php endwhile; ?>
@endsection
    