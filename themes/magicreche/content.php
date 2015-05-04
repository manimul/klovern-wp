<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
	if ( is_single() ) :
		the_title( '<h2 class="entry-title">', '</h2>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;

	get_template_part( 'includes/post-meta' );
	get_template_part( 'includes/thumbnail' );

	 ?><div class="entry-content"><?php
		if ( is_search() ) :
			the_excerpt();
		else :
			the_content('');
			?><div class="post-more"><a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary"><?php _e('Read more', 'magicreche'); ?></a></div><?php
		endif;
	?></div>
</article>