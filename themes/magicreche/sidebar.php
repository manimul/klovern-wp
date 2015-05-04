<?php if ( function_exists('dynamic_sidebar')) {

	if ( is_single() && ( get_post_type() == 'post') ) {

		dynamic_sidebar('Post');		

	} elseif ( is_home() || is_archive() || is_author() || is_category() || is_home() || is_tag() ) {

		dynamic_sidebar('Blog');

	} else {

		dynamic_sidebar('Default');

	}
	
} ?>