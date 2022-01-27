<?php  $categories = get_terms( 'story_categories', array('hide_empty' => false) ); ?>
@if( !empty($categories) )
<ul class="list">
    @foreach($categories as $category)
    <li>
        <a href="{{home_url('/my-ford-stories/')}}?category={{ $category->term_id}}">{{ $category->name }}</a>
    </li>    
    @endforeach
</ul>
@endif
                   