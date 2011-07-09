<?php get_header(); ?>
<div class="body-index">
	<div class="gallery">
	<?php if (have_posts()) : ?> <ul class="thumbnails"> <?php while (have_posts()) : the_post(); ?>

		<li <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php if ( has_post_thumbnail()) {
			   $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
			   echo '<a href="' . get_permalink() . '"><div class="thumbnail-overlay"><strong>' . get_the_title() . '</strong></div><img class="thumbnail" src="' . $thumbnail_url[0] . '" title="' . get_the_title() . '"/></a>';
			 }
			?>
		</li>

			<!--<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>-->

			<?php //include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>


			<!--<footer class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</footer>-->

	<?php endwhile; ?>
	</ul>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	<div class="gallery-push"></div>
	</div>

<?php //get_sidebar(); ?>
</div>

<?php get_footer(); ?>
