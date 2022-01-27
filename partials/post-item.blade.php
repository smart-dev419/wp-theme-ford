<div class="post col-xs-6 col-md-4">
    <div class="img-holder">
        <a href="{{ get_permalink() }}">
            {{ Helper::image(get_post_thumbnail_id($post->ID), 'full', array('width' => '364', 'height' => '243')) }}
        </a>
    </div>
    <div class="post-content">
        <header class="header">
            <strong class="title">
                <a href="{{ get_permalink() }}">{{ the_title() }}</a>
            </strong>
            <div class="meta">
                <time datetime="{{ get_the_date('Y-m-d') }}">{{ get_the_date('F j, Y') }} </time> | 
                <span class="by">{{ _e( 'By' ) }} 
                    <a href="{{ get_the_author_link() }}">{{ get_the_author() }}</a>
                </span>
            </div>
        </header>
        <p>{{ excerpt(13) }}</p>
    </div>
</div>