<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
	if ( is_single() ) :
		the_title( '<h2 class="entry-title">', '</h2>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;

	get_template_part( 'includes/post-meta' );
	get_template_part( 'includes/thumbnail' );

	 ?><div class="entry-content"><?php
		the_content();
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'magicreche' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
	?></div>

</article><?php

$author_description = get_the_author_meta('description');

if( $author_description ) { ?>
	<div class="post-author">
		<div class="col-xs-4"><?php echo get_avatar( get_the_author_meta('user_email'), '200', '' ); ?></div>
		<div class="col-xs-8">
			<h5><?php _e('About The Author', 'magicreche'); ?></h5>
			<p><?php echo $author_description; ?></p>
		</div>
		<div class="clear"></div>
	</div><?php
}

comments_template(); ?>