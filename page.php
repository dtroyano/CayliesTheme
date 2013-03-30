<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<div class="clear"></div>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php 
			if (comments_open() ){
				$a = '<div class="comments"><div class="commentnum">';
				$b = '</div></div>';
				comments_popup_link($a.'0'.$b,
					$a.'1'.$b,
					$a.'%'.$b,
					'comment-wrap');
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
			<div id="edit"><?php edit_post_link('Edit'); ?></div>


	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
		</div>
			
			
		</div>	

<?php get_sidebar(); ?>

<?php get_footer(); ?>