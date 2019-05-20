			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="footer_logo">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img class="w-75" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
					</a>
					<div class="footer_social_section">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- copyright -->
				<div class="footer_top">
					<div class="container">
						<div class="row">
							<div class="col-lg-3">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-area-1')) ?>
							</div>
							<div class="col-lg-3">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-area-2')) ?>
							</div>
							<div class="col-lg-3">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-area-3')) ?>
							</div>
							<div class="col-lg-3">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-area-4')) ?>
							</div>
						</div>
					</div>
				</div>

				<div class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//leelija.com" title="Leelija">Leelija</a>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<script type="text/javascript">
		var s,read_time,numberOfCharecters;
		s = document.getElementById("article_content").innerText;
		s = s.replace(/(^\s*)|(\s*$)/gi,"");
		s = s.replace(/[ ]{2,}/gi," ");
		s = s.replace(/\n /,"\n");
		numberOfCharecters = document.getElementById("article_content").value;
		numberOfCharecters = s.split(' ').length;
		read_time = numberOfCharecters;
		read_time = Math.floor(read_time/275);
		document.getElementById("time_to_read").innerText = read_time + '  mins to read';
		</script>

	</body>
</html>
