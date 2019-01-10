<?php
/**
 * The main template file
 *
 * @package Base Theme
 * @since 0.1.0
 */

get_header(); ?>

<div id="content">
	<main class="main-content">
		<section class="support-section">
			<div class="container">
				<div class="col-sm-11 col-sm-offset-2">
					<h2>Ooopsie!</h2>
					<p>It looks like the page you requested does not exist. Don't worry, you can search the blog or just head back to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage</a>. Don't forget to download the WeeSchool iOS app in the app store!</p>

					<?php get_search_form(); ?>

					<a href="https://itunes.apple.com/app/id1137696655" class="btn btn-primary">Get The App</a>
				</div>
			</div>
		</section>
	</main>
</div>
<?php get_footer();
