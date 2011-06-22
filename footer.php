	<div id="push"></div>
	</div> <!-- close div#page-wrap -->

	<div class="footer">

		<small>
		<ul>
		<li class="first">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></li>
		<li>Using <?php $theme_data = get_theme_data(WP_CONTENT_DIR . '/themes/sunrise/style.css'); echo $theme_data['Title'] . ' by ' . $theme_data['Author']; ?> </li>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
		<?php wp_meta(); ?>
		<li><a href="#">Hide Info</a></li>
		</ul>
		</small>

	</div>

	<?php wp_footer(); ?>


<!--
<div class="background">
	<?php 
	 if ( has_post_thumbnail()) {
	   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
	   echo '<img src="' . $large_image_url[0] . '"/>';
	 }
	?>
</div>
-->
<?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
   echo '<img src="' . $large_image_url[0] . '" class="background" style="min-width:' . $large_image_url[1] . 'px;"/>';
 }
?>
<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
</body>

</html>
