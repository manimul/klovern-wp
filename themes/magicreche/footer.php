<?php
$copyright = ot_get_option('magicreche_copyright', '&copy; 2013 Magicreche. Web Design &amp; Development by <a href="http://www.coffeecreamthemes.com/" target="_blank">Coffeecream Themes</a>.W-P-L-O-C-K-E-R-.-C-O-M');
$social_profiles = ot_get_option('magicreche_social_profiles');

if( !empty($copyright) || $social_profiles ) { ?>

<footer>
<div class="container">
<div class="row text-center">
<div class="col-sm-12"><?php echo $copyright;

	if( $social_profiles ) {

		$facebook = ot_get_option('magicreche_facebook');
		$google = ot_get_option('magicreche_google');
		$twitter = ot_get_option('magicreche_twitter');
		$flickr = ot_get_option('magicreche_flickr');
		$youtube = ot_get_option('magicreche_youtube');
		$linkedin = ot_get_option('magicreche_linkedin');
		$skype_call = ot_get_option('magicreche_skype_call');
		$skype_chat = ot_get_option('magicreche_skype_chat');
		$pinterest = ot_get_option('magicreche_pinterest');
		$instagram = ot_get_option('magicreche_instagram');
		$vimeo = ot_get_option('magicreche_vimeo');
		$tumblr = ot_get_option('magicreche_tumblr');
		$xing = ot_get_option('magicreche_xing'); ?>

		<ul><?php
			if( !empty($facebook) ) { ?><li><a href="<?php echo $facebook; ?>"><i class="fa fa-lg fa-facebook"></i></a></li><?php }
			if( !empty($google) ) { ?><li><a href="<?php echo $google; ?>"><i class="fa fa-lg fa-google-plus"></i></a></li><?php }
			if( !empty($twitter) ) { ?><li><a href="<?php echo $twitter; ?>"><i class="fa fa-lg fa-twitter"></i></a></li><?php }
			if( !empty($flickr) ) { ?><li><a href="<?php echo $flickr; ?>"><i class="fa fa-lg fa-flickr"></i></a></li><?php }
			if( !empty($youtube) ) { ?><li><a href="<?php echo $youtube; ?>"><i class="fa fa-lg fa-youtube"></i></a></li><?php }
			if( !empty($linkedin) ) { ?><li><a href="<?php echo $linkedin; ?>"><i class="fa fa-lg fa-linkedin"></i></a></li><?php }
			if( !empty($skype_call) ) { ?><li><a href="skype:<?php echo $skype_call; ?>?call"><i class="fa fa-lg fa-skype"></i></a></li><?php }
			if( !empty($skype_chat) ) { ?><li><a href="skype:<?php echo $skype_chat; ?>?call"><i class="fa fa-lg fa-skype"></i></a></li><?php }
			if( !empty($pinterest) ) { ?><li><a href="<?php echo $pinterest; ?>"><i class="fa fa-lg fa-pinterest"></i></a></li><?php }
			if( !empty($instagram) ) { ?><li><a href="<?php echo $instagram; ?>"><i class="fa fa-lg fa-instagram"></i></a></li><?php }
			if( !empty($vimeo) ) { ?><li><a href="<?php echo $vimeo; ?>"><i class="fa fa-lg fa-vimeo-square"></i></a></li><?php }
			if( !empty($tumblr) ) { ?><li><a href="<?php echo $tumblr; ?>"><i class="fa fa-lg fa-tumblr"></i></a></li><?php }
			if( !empty($xing) ) { ?><li><a href="<?php echo $xing; ?>"><i class="fa fa-lg fa-xing"></i></a></li><?php } ?>
		</ul><?php

	} ?>

</div>
</div>
</div>
</footer>

<?php }

wp_footer(); ?>

</body>
</html>