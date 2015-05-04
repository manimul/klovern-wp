<?php

$section_page = get_post( $page->ID );

$css_classes = get_post_class('', $section_page->ID);

?><section id="<?php echo esc_attr(getMagicrechePageID($section_page->ID)); ?>" class="<?php echo implode(" ", $css_classes); ?>">
	<div class="container"><?php

	include(locate_template( 'includes/page-title.php' ));

	$content = apply_filters('the_content', $page->post_content);
	echo $content;

	?></div>
 </section>