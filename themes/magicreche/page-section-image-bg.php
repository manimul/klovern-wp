<?php /* Template name: Section: Image / Background */

$style = '';

$section_page = get_post( $page->ID );

$css_classes = get_post_class('', $section_page->ID);

$background    = get_post_meta( $section_page->ID, 'magicreche-background', true );
$min_height    = get_post_meta( $section_page->ID, 'magicreche-min-height', true );
$content_color = get_post_meta( $section_page->ID, 'magicreche-content-color', true );

if( empty($content_color) ) $content_color = 'default';

$css_classes[] = 'scheme-' . $content_color;

if( !empty($background) ) {

	$style = ' style="';
	// Background
	if( !empty( $background['background-color'] ) )  $style .= 'background-color:' . $background['background-color'] . ';';
	if( !empty( $background['background-repeat'] ) )  $style .= 'background-repeat:' . $background['background-repeat'] . ';';
	if( !empty( $background['background-attachment'] ) )  $style .= 'background-attachment:' . $background['background-attachment'] . ';';
	if( !empty( $background['background-position'] ) )  $style .= 'background-position:' . $background['background-position'] . ';';
	if( !empty( $background['background-image'] ) )  $style .= 'background-image: url(\'' . $background['background-image'] . '\');';
	// Min Height
	if( !empty( $min_height ) )  $style .= 'min-height:' . $min_height . ';';
	$style .= '"';

}

$magicreche_overlay = get_post_meta( $section_page->ID, 'magicreche-overlay', true );
$magicreche_overlay_opacity = get_post_meta( $section_page->ID, 'magicreche-overlay-opacity', true );

if( !empty($magicreche_overlay) ) {
	$overlay = '<div class="tint" style="background-color:' . $magicreche_overlay . ';opacity:' . $magicreche_overlay_opacity . '"></div>';
} else {
	$overlay = '';
}

?><section id="<?php echo esc_attr(getMagicrechePageID($section_page->ID)); ?>" class="<?php echo implode(" ", $css_classes); ?>"<?php echo $style; ?>>
	<?php echo $overlay; ?>
	<div class="container"><?php

	include(locate_template( 'includes/page-title.php' ));

	$content = apply_filters('the_content', $page->post_content);
	echo $content;
	
	?></div>
</section>