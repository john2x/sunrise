	<div id="push"></div>
	</div> <!-- close div#page-wrap -->

	<div class="footer">

		<small>
		<ul>
		<li class="first">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></li>
		<li>Using <?php $theme_data = get_theme_data(WP_CONTENT_DIR . '/themes/sunrise/style.css'); echo '<a href="' . $theme_data['URI'] . '" title="Go to theme\'s homepage. ">' . $theme_data['Title'] . '</a> theme. '; ?> </li>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to RSS">Entries (RSS)</a></li>
		<?php wp_meta(); ?>
		<li><a href="#" title="Toggle information overlay. " id="info-toggle">Show/hide Info</a></li>
		</ul>
		</small>

	</div>

	<?php wp_footer(); ?>


<!--
<div class="background">
</div>
-->
<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<script type"text/javascript">
	var hidden = false;
	$("#info-toggle").click(function() { 
		if (hidden) {
			$(".body>article").fadeIn(); 
		} else {
			$(".body>article").fadeOut(); 
		}
		hidden = !hidden
	});
</script>

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
