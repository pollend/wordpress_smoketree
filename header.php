
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
	 <?php wp_title('|'); ?>
	</title>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<head profile="http://gmpg.org/xfn/11"><?php wp_head(); ?></head>

<body <?php body_class(); ?>>


<div class="row">

	<div id="title">
		<?php if(get_header_image() == "") : ?>
			<a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
		<?php else: ?>
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		<?php endif; ?>
	</div>

	<div class="top-bar stacked-for-medium">
	  <div class="top-bar-left">
	    
			<?php $args = array(
                'menu'            => 'main-menu', 
                'container'       => '', 
                'container_class' => 'false', 
                'container_id'    => '',
                'menu_class'      => 'menu header-menu', 
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
		      ); ?>
		      <?php wp_nav_menu( $args); ?>
	  </div>
	  <div class="top-bar-right">
	  	<?php get_search_form(); ?>
	  </div>
	</div>
</div>