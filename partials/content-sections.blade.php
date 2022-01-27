<?php 
$sections = get_field('content_sections'); 
$blocks_wrap = false;
$top_block_index = 0;
$top_block_class = "";
?>

@if( !empty($sections) )

    @foreach( $sections as $section_key => $section )

        <?php 
        if ( $section['acf_fc_layout'] == 'headline_panel' ) {
            $blocks_wrap = true;
            if ( $top_block_index == 0 ) {
                $top_block_class = "intro-top-block";
            } else {
                $top_block_class = "top-block";
            }
            $top_block_index++;
         ?>
         <div class="blocks-wrap">
        <?php } ?>
        
        @include('content-sections/' . $section['acf_fc_layout'])
    	
    	<?php 
        $next_layout = $sections[$section_key+1]['acf_fc_layout']; 
        if ( $next_layout == 'headline_panel' && $blocks_wrap == true) {
           $blocks_wrap = false;
         ?>
         </div><!-- .blocks-wrap -->
        <?php } ?>

    @endforeach

@endif

@if( $blocks_wrap == true )<!-- if blocks_wrap has only headline_panel -->
    </div><!-- .blocks-wrap -->
@endif