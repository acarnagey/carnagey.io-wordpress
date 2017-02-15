<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */
?>

</div><!-- #main .site-main -->
<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
	<ul class="social-icons">
		<li><a href="https://www.youtube.com/channel/UCJ5PlES9R9w6dtvKCauERTw" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
		<li><a href="https://github.com/acarnagey" target="_blank"><i class="fa fa-github-square"></i></a></li>
		<li><a href="https://www.linkedin.com/in/adam-carnagey-05479713" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
		<li><a href="http://codepen.io/acarnagey/" target="_blank"><i class="fa fa-codepen"></i></a></li>
	</ul>
	<div class="site-info">
		<?php echo independent_publisher_footer_credits(); ?>
	</div>
	<!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
