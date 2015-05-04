<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die('Please do not load this page directly. Thanks!');

if ( post_password_required() ) {
	_e('This post is password protected. Enter the password to view comments.', 'magicreche');
	return;
} 

if ( is_singular() ) wp_enqueue_script( "comment-reply" );

if ( have_comments() ) : ?>

<div class="comments">
	<h3><?php comments_number( __('No Comments', 'magicreche'), __('1 Comment', 'magicreche'), __('% Comments', 'magicreche') ); ?></h3>
	<ul class="media-list"><?php
		wp_list_comments(array(
			'callback'    => 'magicreche_comment',
			'max_depth'   => 3,
		)); ?>
	</ul><?php

	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation.

else : // this is displayed if there are no comments so far

 	if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
		<div class="comments"><p><?php _e('No Comments Yet', 'magicreche'); ?></p><?php

	endif;
	
endif;
		
if ( comments_open() ) : ?>

	<hr><?php
	
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	// Custom Fields
	$fields =  array(
		'author'=> '<div class="form-group"><label for="author">' . __('Name *', 'magicreche') . '</label><input name="author" data-required="true" class="form-control" type="text" placeholder="' . __('John Doe', 'magicreche') . '" size="30"' . $aria_req . '></div>',
		'email'=> '<div class="form-group"><label for="email">' . __('Email *', 'magicreche') . '</label><input name="email" data-required="true" class="form-control" type="text" placeholder="' . __('name@domain.com', 'magicreche') . '" size="30"' . $aria_req . '></div>',
		'website'=> '<div class="form-group"><label for="website">' . __('Website (not required)', 'magicreche') . '</label><input name="website" class="form-control" type="text" placeholder="' . __('www.domain.com', 'magicreche') . '" size="30"></div>',
	);

	//Comment Form Args
    $comments_args = array(
		'fields' => $fields,
		'title_reply'=> __('Leave a Comment', 'magicreche'),
		'comment_field' => '<div class="form-group"><label for="comment">' . __('Message', 'magicreche') . '</label><textarea id="comment" name="comment" data-required="true" class="form-control" cols="10" rows="6" tabindex="4"></textarea></div>',
		'label_submit' => __('Submit','magicreche')
	);
	
	// Show Comment Form
	comment_form($comments_args); ?>

	</div><?php

endif; ?>