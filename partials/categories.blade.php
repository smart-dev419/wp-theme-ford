<ul class="category-list">
    <li<?php echo (!isset($_GET['category']))? " class='active'":""; ?>>
        <a href="{{get_permalink()}}">All</a>
    </li>
    @if( !empty($categories) )
        @foreach($categories as $category)
        <li<?php echo ($_GET['category']==$category->term_id)? " class='active'":""; ?>>
            <a href="{{get_permalink()}}?category={{ $category->term_id}}">{{ $category->name }}</a>
        </li>
        @endforeach
    @endif
</ul>