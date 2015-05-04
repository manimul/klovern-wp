<?php /* Template name: Single: Sidebar Right */
get_header();

$page_title = get_post_meta( get_the_ID(), 'magicreche-page-title', true );

if( $page_title == 'enabled' ) { ?>
	<header><?php the_title( '<h1>', '</h1>' ); ?></header><?php
} ?>

<div class="container">
	<div class="row">
		<article id="<?php echo esc_attr(getMagicrechePageID($section_page->ID)); ?>" <?php post_class('col-sm-8'); ?>><?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

						$page_title = get_post_meta( $post->ID, 'perfekta_page_title', true );

						if( $page_title == 'enabled' ) {
							the_title( '<h1 class="page-title">', '</h1>' );
						}

						the_content();

				endwhile;

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;

		?></article>
		<div class="col-sm-4 sidebar"><?php get_sidebar(); ?></div>
	</div>
</div>

<?php get_footer(); ?>