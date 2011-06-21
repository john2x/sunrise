<?php get_header(); ?>
<div class="container-body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<div class="entry-content">
				
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			
				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

				<div class="entry-background">
					<?php 
					 if ( has_post_thumbnail()) {
					   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
					   echo '<img src="' . $large_image_url[0] . '"/>';
					 }
					?>
				</div>
			</div>

			<div class="navigation">
				<div class="prev-post"><?php previous_post_link('%link', '&lt;') ?></div>
				<!--<div class="edit-post"><?php edit_post_link('Edit','',''); ?></div>-->
				<div class="next-post"><?php next_post_link('%link', '&gt;') ?></div>
			</div>


		</article>

	<?php //comments_template(); ?>

	<?php endwhile; ?>

	<?php endif; ?>
	
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
