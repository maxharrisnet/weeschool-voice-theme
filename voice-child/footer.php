<?php
/**
 * The template for displaying the footer.
 *
 * @package Base Theme
 * @since 0.1.0
 */
?>

	<footer class="weeschool-footer">
		<div class="container">
			<nav class="col-xs-15 col-md-11 col-md-offset-1">
				<ul>
					<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
					<li><a href="<?php echo get_site_url(); ?>/about-us">About Us</a></li>
					<li><a href="<?php echo get_site_url(); ?>/our-research">Our Research</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo get_site_url(); ?>/weeblog">For Parents</a></li>
					<li><a href="<?php echo get_site_url(); ?>/toy-store">Toy Store</a></li>
					<li><a href="<?php echo get_site_url(); ?>/faqs">FAQs</a></li>
				</ul>				
				<ul>
					<li><a href="<?php echo get_site_url(); ?>/contact-us">Contact Us</a></li>
					<li><a href="<?php echo get_site_url(); ?>/terms-and-conditions">Terms &amp; Conditions</a></li>
						<ul class="inline-list social-media-menu">
							<li>
								<a class="facebook" href="https://www.facebook.com/WeeSchoolApp/" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/social/icon-facebook-white.svg" />
									<span class="sr-only">Facebook</span>
								</a>
							</li>
							<li>
								<a class="twitter" href="https://twitter.com/WeeSchoolApp" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/social/icon-twitter-white.svg" />
									<span class="sr-only">Twitter</span>
								</a>
							</li>
							<li>
								<a class="instagram" href="https://www.instagram.com/WeeSchoolApp/" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/social/icon-instagram-white.svg" />
									<span class="sr-only">Instagram</span>
								</a>
							</li>
							<li>
								<a class="pinterest" href="https://www.pinterest.com/WeeSchoolApp/" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/social/icon-pinterest-white.svg" />
									<span class="sr-only">Pinterest</span>
								</a>
							</li>
							<li>
								<a class="pinterest" href="https://www.youtube.com/channel/UClCc6QZS1WIqg2jo5jEZWtQ" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/social/icon-youtube-white.svg" />
									<span class="sr-only">YouTube</span>
								</a>
							</li>
						</ul>
				</ul>
			</nav>
			<div class="meta-area col-xs-15 col-md-3">
				<a href="https://itunes.apple.com/app/id1137696655" target="_blank">
					<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer/app-icon@2x.png" alt="weeschool logo" width="" height="" />
				</a>
				<a href="https://itunes.apple.com/app/id1137696655" target="_blank">
					<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/app-store-badge.svg" alt="weeschool logo" width="" height="" />
				</a>
				<span class="copyright">&copy; <?php echo date("Y") ?> WeeSchool</span>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>