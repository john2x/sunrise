<?php get_header(); ?>
<div class="body-index">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<!--<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>-->

			<?php //include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			<div class="content-wrapper">
				<?php //the_content(); ?>
				<?php if ( has_post_thumbnail()) {
				   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
				   echo '<img class=".thumbnail" src="' . $large_image_url[0] . '"/>';
				 }
				?>
			</div>

			<!--<footer class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</footer>-->

		</article>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php //get_sidebar(); ?>
</div>

<?php get_footer(); ?>
