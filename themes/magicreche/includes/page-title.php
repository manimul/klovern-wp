<?php
$page_title = get_post_meta( $page->ID, 'magicreche-page-title', true );

if( empty($page_title) || $page_title == 'enabled' ) {
	$page_sub_title = get_post_meta( $page->ID, 'magicreche-sub-title', true ); ?>

	<hgroup class="page-title">
		<h2><?php echo $section_page->post_title; ?></h2>
		<?php if( !empty( $page_sub_title ) ) { ?><h5><?php echo $page_sub_title; ?></h5><?php } ?>
	</hgroup><?php
}