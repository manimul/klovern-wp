<?php get_header();

	if ( have_posts() ) {
		// Start the Loop.
		while ( have_posts() ) : the_post();

			$page_title = get_post_meta( get_the_ID(), 'magicreche-page-title', true );

			if( $page_title == 'enabled' ) { ?>
				<header><?php the_title( '<h1>', '</h1>' ); ?></header><?php
			} ?>
 
			<article id="<?php echo esc_attr(getMagicrechePageID()); ?>" <?php post_class(); ?>>
				<div class="container"><?php

				the_content();

				?></div>
			</article><?php

		endwhile;

	} else {
		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );

	}

get_footer(); ?>