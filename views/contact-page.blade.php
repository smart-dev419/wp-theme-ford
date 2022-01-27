@layout('layouts/master')
<?php /* Template Name: Contact */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>

@include('partials/hero')

<div class="contact-form-holder">
    <div class="container">
        @include('forms/contact')
    </div>
</div>

@include('partials/googlemap')

@include('partials/footer-panel')

<div class="download-area">
    <div class="download-list">
        <div class="holder">
            <strong class="title">{{ get_field('down_header') }}</strong>
            @if( !empty(get_field('down_files')) )
            <ul class="list">
                @foreach(get_field('down_files') as $file)
                <li><a href="{{ $file['file'] }}">{{ $file['title'] }}</a></li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
    <div class="img-holder">
        <div class="img-wrap" style="background: url({{ get_field('down_image') }}) no-repeat 50% 50% / cover"></div>
    </div>
</div>

<?php endwhile; ?>
@endsection
    