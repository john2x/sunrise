<?php get_header(); ?>
<div class="body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

				<h1 class="post-title"><?php the_title(); ?></h1>

				<?php //include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

				<!--<div class="entry">-->

				<div class="content-wrapper">
					<?php the_content(); ?>
				</div>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<!--</div>-->


		</article>
		
		<?php //comments_template(); ?>

		<?php endwhile; endif; ?>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
