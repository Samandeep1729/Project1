<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="post-image">
		<?php cpotheme_postpage_image(); ?>
	</div>
	<div class="post-body<?php if(has_post_thumbnail()) echo ' post-body-image'; ?>">
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="post-author">
			<?php echo get_avatar(get_the_author_meta('ID'), 160); ?>
		</a>
		<?php cpotheme_postpage_title(); ?>
		<div class="post-byline">
			<?php wp_enqueue_style('cpotheme-fontawesome'); ?>
			<?php cpotheme_postpage_date(); ?>
			<?php cpotheme_postpage_categories(); ?>
			<?php cpotheme_postpage_comments(); ?>
			<?php cpotheme_edit(); ?>
		</div>
		<div class="post-content">
			<?php cpotheme_postpage_content(); ?>
		</div>
		<?php if(is_singular('post')) cpotheme_postpage_tags(false, '', '', ''); ?>
		<?php cpotheme_postpage_readmore(); ?>
	</div>
	<div class="clear"></div>
</article>
