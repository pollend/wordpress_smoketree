
<?php get_header(); ?>

<div>
	<div id="contentContainer">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div <?php post_class('post') ?> id="post-<?php the_ID(); ?>">

				<div class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>

				<div class="meta"></div>


				<div class="entry">
					<?php the_content(); ?>
					
				</div>
				<?php comments_template(); ?>
			</div>
			

			<?php endwhile; endif; ?>


	</div>

	<div id="sidebarContainer">
		<?php get_sidebar(); ?>
	</div>
</div>