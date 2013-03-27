<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="clear"></div>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php if (comments_open() ){
				comments_popup_link('<div class="comments"><div class="commentnum">%</div></div>');
			} ?>
			<div class="author">By <?php the_author() ?></div>
			<div class="date"><?php the_time('n.j.y') ?></div>
			
			<div class="text">
				<?php the_content(); ?>
			</div>

			<div class="tags">
				<?php the_tags('Tags: ', ', ', ' | '); ?>
				Categories: <?php the_category(', ') ?> 
			</div>
			<?php edit_post_link('Edit this entry','','.'); ?>


	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
		</div>
			
			
		</div>	
<?php get_sidebar(); ?>

<?php get_footer(); ?>