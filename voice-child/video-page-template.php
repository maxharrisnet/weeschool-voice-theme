<?php
/**
 * Template Name: Videos
 *
 * @package Base Theme
 * @since 0.1.0
 */

get_header(); ?>

<div id="content">
	<main class="main-content">
		<section class="hero">
			<div class="container">
				<h1 class="col-md-offset-1"><?php the_field('video_hero_h1'); ?></h1>
			</div>
		</section>

		<section class="centered-section">
		<div class="container">
			<p>
				<?php the_field('video_section_one_paragraph_1'); ?>
			</p>

			<ul class="inline-list">
				<li class="col-xs-5">
				<a href="#classical-toys-products-anchor">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/video-toys/img-classicaltoys@2x.png" />
					<h3>Classical Toys</h3>
				</a>
				</li>
				<li class="col-xs-5">
				<a href="#macdonalds-farm-products-anchor">				
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/video-toys/img-farm@2x.png" />
					<h3>MacDonald's Farm</h3>
				</a>
				</li>
				<li class="col-xs-5">
				<a href="#sweet-dreams-products-anchor">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/video-toys/img-sweetdreams@2x.png" />
					<h3>Sweet Dreams</h3>
				</a>
				</li>
			</ul>
			</div>
		</section>

		<section class="product-section">
			<div class="product-grid col-sm-13 col-sm-offset-1">
				<div id="classical-toys-products" class="products"></div>

				<div id="sweet-dreams-products" class="products"></div>

				<div id="macdonalds-farm-products" class="products"></div>
			</div>
		</section>
	</main>
</div>

<script>

	var classicalXmlHttp = new XMLHttpRequest();
	var sweetXmlHttp = new XMLHttpRequest();
	var macdonaldsXmlHttp = new XMLHttpRequest();
	// var puppetXmlHttp = new XMLHttpRequest();

	var classicalUrl = "https://production2.joyboxdev.com/api/v1/products/search?video_id=1";
	var sweetUrl = "https://production2.joyboxdev.com/api/v1/products/search?video_id=2";
	var macdonaldsUrl = "https://production2.joyboxdev.com/api/v1/products/search?video_id=3";
	// var puppetUrl = "http://production2.joyboxdev.com/api/v1/products/search?video_id=4";

	classicalXmlHttp.onreadystatechange=function() {
	    if (this.readyState == 4 && this.status == 200) {
	        weeSchoolProducts(this.responseText, "Classical Toys", "classical-toys-products");
	    }
	}
	classicalXmlHttp.open("GET", classicalUrl, true);
	classicalXmlHttp.send();

	sweetXmlHttp.onreadystatechange=function() {
	    if (this.readyState == 4 && this.status == 200) {
	        weeSchoolProducts(this.responseText, "Sweet Dreams", "sweet-dreams-products");
	    }
	}
	sweetXmlHttp.open("GET", sweetUrl, true);
	sweetXmlHttp.send();

	macdonaldsXmlHttp.onreadystatechange=function() {
	    if (this.readyState == 4 && this.status == 200) {
	        weeSchoolProducts(this.responseText, "MacDonald's Farm", "macdonalds-farm-products");
	    }
	}
	macdonaldsXmlHttp.open("GET", macdonaldsUrl, true);
	macdonaldsXmlHttp.send();

	// puppetXmlHttp.onreadystatechange=function() {
	//     if (this.readyState == 4 && this.status == 200) {
	//         weeSchoolProducts(this.responseText, "Puppet Play Products", "puppet-play-products");
	//     }
	// }
	// puppetXmlHttp.open("GET", puppetUrl, true);
	// puppetXmlHttp.send();

	function weeSchoolProducts(response, productsHeading, productDiv ) {
	    var prods = JSON.parse(response);
	    var i;
	    var out = "<div id='" + productDiv + "-anchor' class='anchor' ></div><h2>" + productsHeading + "</h2><ul class='inline-list'>";

	    for(i = 0; i < prods.data.length; i++) {
	        if (i == 4) {
	        	out += "<div class='more-products'>"
	        } else { }
	        out += "<li><a href='" +
	        prods.data[i].linkToStore +
	        "' target='_blank'><img src='" +
	        prods.data[i].image +
	        "'/><summary><h3>" +
	        prods.data[i].name +
	        "</h3></summary></a></li>";
	        if (prods.data.length > 3 && i == prods.data.length) {
	        	out += "</div>"
	        } else { }
	    }
		out += "</ul><button class='more btn btn-default center'" + (i <= 4 ? " style='display: none;'" : "") + ">See More <span class='glyphicon glyphicon-menu-down'></span></button>";

	    document.getElementById(productDiv).innerHTML = out;

		// var items = jQuery(".product-grid li");
		// for(var i = 2; i < prods.data.length; i+=2) {
		//   items.slice(i, i+2).wrapAll("<div class='row'></div>");
		// }

	}

	jQuery(".more").live("click", "button", function(){
		event.preventDefault(); /* prevent the a from changing the url */
		jQuery(this).html("See less <span class='glyphicon glyphicon-menu-up'>");
		console.log(jQuery(this).innerHTML );
		jQuery(this).parents('.products').find('.more-products').toggleClass("auto-height");
	});

</script>

<?php get_footer();
