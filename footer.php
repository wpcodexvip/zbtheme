<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZetBlog
 */

?>

		<!-- Begin Footer
	================================================== -->
	<div class="footer">
			<p class="pull-left">
				Copyright &copy; 2017 Your Website Name
			</p>
			<p class="pull-right">
				Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
			</p>
			<div class="clearfix">
			</div>
		</div>
		<!-- End Footer
	================================================== -->

	</div>
	<!-- /.container -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
		integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
	</script>
	<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>

<?php wp_footer(); ?>

</body>
</html>
