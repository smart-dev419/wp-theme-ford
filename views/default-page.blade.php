@layout('layouts/master')
@section('content')
<?php while ( have_posts() ) : the_post(); ?>

	@include('partials/content-sections')

<?php endwhile; ?>
@endsection