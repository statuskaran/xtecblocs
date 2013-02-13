<?php get_header(); ?>
<div id="content">
	<div id="main">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<span class="post-date" title="Date"><?php the_time('d F Y') ?></span>
		<span class="post-time" title="Time"><?php the_time('g:i a') ?></span>
		<span class="post-author" title="Author"><?php the_author() ?></span>
		<span class="post-cath" title="Category"><?php the_category(', ') ?></span>
		<span class="post-edit"><?php edit_post_link(__('Edit','colors-idea'),'',''); ?></span>
		<span class="entry"><?php the_content(__('Read the rest...','colors-idea')); ?></span>
	</div>
<?php comments_template(); ?>
<?php endwhile; ?>
<p align="center"><?php next_posts_link(__('&laquo; Previous Entries','colors-idea')) ?> <?php previous_posts_link(__('Next Entries &raquo;','colors-idea')) ?></p>
<?php else : ?>
<h2 align="center"><?php _e('Not Found','colors-idea');?>'</h2>
<p align="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','colors-idea');?></p>
	<?php endif; ?>
	</div>
	
<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>

</body>
</html>