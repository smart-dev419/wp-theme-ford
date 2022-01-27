<aside class="aside">
    <div class="widget">
        <h2>{{ _e( 'Most Recent' ) }}</h2>
        <ul class="recent-list">
        <?php
            $options = array(
                'post_type' => get_post_type(),
                'posts_per_page' => 4,
                'post_status' => 'publish'
            );

            $articles = new WP_Query( $options );
            while( $articles->have_posts() ) : $articles->the_post();
        ?>
            <li>
                <div class="img-wrap">
                    <a href="{{ get_permalink() }}">
                        {{ Helper::image(get_post_thumbnail_id($post->ID), 'full', array('width' => '81', 'height' => '56')) }}
                    </a>
                </div>
                <div class="txt-holder">
                    <strong class="title">
                        <a href="{{ get_permalink() }}">{{ the_title() }}</a>
                    </strong>
                    <div class="meta">
                        <time datetime="{{ get_the_date('Y-m-d') }}">{{ get_the_date('F j, Y') }} </time> | 
                        <span class="by">{{ _e( 'By' ) }} 
                            <a href="{{ get_the_author_link() }}">{{ get_the_author() }}</a>
                        </span>
                    </div>
                </div>
            </li>
        <?php
             endwhile;
             wp_reset_query();
         ?>   
        </ul>
    </div>
    <div class="widget">
        <h2>{{ _e( 'Categories' ) }}</h2>
        @if(get_post_type() == 'post')
            @include('sidebars/blog-categories')
        @elseif(get_post_type() == 'story')
            @include('sidebars/story-categories')
        @endif
    </div>
    <div class="widget">
        <h2>{{ _e( 'ARCHIVE' ) }}</h2>
        <ul class="date-list">
        <?php 
        wp_get_archives(array(
            'type'      => 'yearly', 
            'post_type' => get_post_type(), 
            'format'    => 'html' 
        ));
         ?>
        </ul>
    </div>
    @if(get_post_type() == 'post')
        @include('sidebars/blog-footer')
    @elseif(get_post_type() == 'story')
        @include('sidebars/story-footer')
    @endif
</aside>