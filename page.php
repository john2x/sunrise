<?php get_header(); ?>
<div class="body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry-content">
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

				<!--<div class="entry">-->

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<!--</div>-->

			</div>

		</article>
		
		<?php //comments_template(); ?>

		<?php endwhile; endif; ?>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
