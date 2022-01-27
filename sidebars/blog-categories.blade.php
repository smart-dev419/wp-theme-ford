<?php $categories = get_categories(); ?>
@if( !empty($categories) )
<ul class="list">
    @foreach($categories as $category)
    <li>
        <a href="{{home_url('/blog/')}}?category={{ $category->term_id}}">{{ $category->name }}</a>
    </li>    
    @endforeach
</ul>
@endif
                   