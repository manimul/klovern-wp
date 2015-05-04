<div class="entry-meta">
<span class="date"><i class="fa fa-calendar"></i><time datetime="<?php echo date(DATE_W3C); ?>"><?php the_time('F j, Y'); ?></time></span>
<span class="author"><i class="fa fa-user"></i><?php _e('By', 'magicreche'); ?> <?php the_author(); ?></span>
<span class="comments"><i class="fa fa-comment"></i><a href="#comments"> <?php comments_number( __('No Comments', 'magicreche'), __('1 Comment', 'magicreche'), __('% Comments', 'magicreche') ); ?></a></span><?php 
if( has_category() ) { ?><span class="entry-categories"><i class="fa fa-tag"></i><?php _e('Posted in', 'magicreche'); ?> <?php the_category(', '); ?></span><?php }
if( has_tag() ) { ?><span class="entry-tags"><i class="fa fa-tags"></i><?php _e('Tags:', 'magicreche'); ?> <?php the_tags('', ', '); ?></span><?php } ?>
</div>