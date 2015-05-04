<?php /* Template name: Section: Slider */

wp_enqueue_script('animate');
wp_enqueue_script('easing');
wp_enqueue_script('superslides');

$style = ''; 

$section_page = get_post( $page->ID );

$css_classes = get_post_class('', $section_page->ID);

$slides        = get_post_meta( $section_page->ID, 'magicreche-slides', true );
$fullscreen    = get_post_meta( $section_page->ID, 'magicreche-fullscreen', true );
$content_color = get_post_meta( $section_page->ID, 'magicreche-content-color', true );
$min_height    = get_post_meta( $section_page->ID, 'magicreche-min-height', true );
$arrows        = get_post_meta( $section_page->ID, 'magicreche-arrows', true );
$pagination    = get_post_meta( $section_page->ID, 'magicreche-pagination', true );
$pause         = get_post_meta( $section_page->ID, 'magicreche-pause', true );
$animation     = get_post_meta( $section_page->ID, 'magicreche-animation', true );
$effect        = get_post_meta( $section_page->ID, 'magicreche-effect', true );

if( empty($content_color) ) $content_color = 'default';
if( empty($pause) ) $pause = '5000';
if( empty($animation) ) $animation = '1000';
if( empty($effect) ) $effect = 'fade';
if( empty($pagination) ) $pagination = 0;
if( empty($arrows) ) $arrows = 0;

$css_classes[] = 'scheme-' . $content_color;
if( !$arrows ) $css_classes[] = 'no-arrows';
if( $fullscreen == 'yes' ) $css_classes[] = 'fullscreen';

if( !empty($min_height) ) {

	$style = ' style="';
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

$slides_count = count( $slides );

?><section id="<?php echo esc_attr(getMagicrechePageID($section_page->ID)); ?>" class="<?php echo implode(" ", $css_classes); ?>"<?php echo $style; ?>><?php

	if( $slides_count > 1 ) { ?>
		<div class="superslides" data-width="#<?php echo esc_attr(getMagicrechePageID($section_page->ID)); ?>" data-height="#<?php echo esc_attr(getMagicrechePageID($section_page->ID)); ?>" data-pagination="<?php echo $pagination; ?>" data-pause="<?php echo $pause; ?>" data-animation="<?php echo $animation; ?>" data-effect="<?php echo $effect; ?>">
			<div class="slides-container"><?php
				foreach( $slides as $slide ) { ?>
					<img src="<?php echo $slide['slide-image']; ?>" alt="<?php echo $slide['title']; ?>"><?php
				} ?>
			</div>
		</div><?php
	} else if( $slides_count == 1 ) {
		foreach( $slides as $slide ) { ?>
			<div class="singleslide" style="background-image: url('<?php echo $slide['slide-image']; ?>');"></div><?php
		}
	}
	echo $overlay; ?>

	<div class="container"><?php

	include(locate_template( 'includes/page-title.php' ));

	$content = apply_filters('the_content', $page->post_content);
	echo $content;
	
	?></div>
</section>