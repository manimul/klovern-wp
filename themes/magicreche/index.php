<?php get_header();

$title = ot_get_option('blog_title', 'Blog'); ?>

<header><h1><?php echo $title; ?></h1></header>

<div class="container posts-archives"><?php

	if( ot_get_option('blog_sidebar', 1) ) { ?>
	<div class="row">
		<div class="col-sm-8"><?php
	}
			if ( have_posts() ) {
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					if( is_single() ) {
						get_template_part( 'content', 'single' );
					} else {
						get_template_part( 'content' );
					}

				endwhile;

				?><nav class="pagination"><?php posts_nav_link(); ?></nav><?php

			} else {
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			}
	if( ot_get_option('blog_sidebar', 1) ) { ?>
		</div>
		<div class="col-sm-4 sidebar"><?php get_sidebar(); ?></div><?php
	} ?>
	</div>
</div>
<?php get_footer(); ?>