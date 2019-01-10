<?php
/**
 * Template Name: WeeSchool Toy Store
 *
 * @package Base Theme
 * @since 0.1.0
 */

get_header(); ?>

<div id="content">
	<main class="main-content">
		<section class="hero">
			<div class="container">
				<div class="col-md-offset-1 hidden-xs">
					<h1><?php the_field('shop_hero_h1'); ?></h1>
					<p>
                        <?php the_field('shop_hero_paragraph_1'); ?>
					</p>
					<a href="#shop-by-month" class="btn btn-default">Shop Now</a>
				</div>
			</div>
		</section>

		<section class="breakout-section">
			<div class="container">
				<div class="hidden-md hidden-lg">
					<h1><?php the_field('shop_section_one_header_1'); ?></h1>
					<p>
                        <?php the_field('shop_section_one_paragraph_1'); ?>
					</p>
				</div>

				<div class="col-md-8 col-md-offset-1 hidden-xs hidden-sm">
					<h2><?php the_field('shop_section_one_header_1'); ?></h2>
					<p>
						<?php the_field('shop_section_one_paragraph_1'); ?>
					</p>
                    <p>
                        <?php the_field('shop_section_one_paragraph_2'); ?>
                    </p>
				</div>
				<div class="breakout-aside col-md-4 col-md-offset-1 hidden-xs hidden-sm">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/toy-store/img-playplan2@2x.png" />
				</div>
			</div>
		</section>

		<section class="product-section">
			<div id="shop-by-month" class="anchor"></div>
			<h2 class="h2">Shop by Month</h2>
			<nav class="pagination row hidden-xs hidden-sm">
				<ul id="month-buttons" class="inline-list"></ul>
			</nav>
			
			<div class="row">
				<div class="col-xs-13 col-xs-offset-1 hidden-md hidden-lg">
					<select id="month-options"></select>
				</div>
			</div>

			<div class="product-grid col-sm-13 col-sm-offset-1">
                <div id="milestone-products" class="products"></div>
				<div id="play-plan-products" class="products"></div>
			</div>			
		</section>

		<section class="secondary-hero"></section>

		<section class="centered-section">
			<div class="container">
				<div class="col-sm-9 col-sm-offset-3">
					<h2><?php the_field('shop_section_two_header_1'); ?></h2>
					<p>
					   <?php the_field('shop_section_two_paragraph_1'); ?>
					</p>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<ul class="flush-list inline-list">
						<li class="col-xs-5">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/toy-store/video-img1@2x.png" />
						</li>
						<li class="col-xs-5">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/toy-store/video-img2@2x.png" />
						</li>
						<li class="col-xs-5">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/toy-store/video-img3@2x.png" />
						</li>					
					</ul>
					<a href="<?php echo site_url(); ?>/videos" class="btn btn-default center">Shop Toys in Videos</a>
				</div>
			</div>
		</section>
	</main>
</div>

<script type="text/javascript">

    var currentMonth = parseInt(location.pathname.split("/")[4]);
    var currentMonth =  parseInt(currentMonth) || 0;

    function loadDoc(docMonth) {
        var currentMonth = docMonth;
        var currentMonth =  parseInt(currentMonth) || 0;
        var months = [];

        if (currentMonth < 13) {
            var lowMonth = 0;
            var highMonth = 13;
        }

        else if (currentMonth >= 13 && currentMonth <= 23) {
            var lowMonth = currentMonth - 6;
            var highMonth = currentMonth + 6;
        }

        else {
            var lowMonth = 23;
            var highMonth = 36;     
        }

        for (var i = lowMonth; i <= highMonth; i++) {
            months.push(i);
        };
        
        var nextMonth = (currentMonth > 36) ? currentMonth + 1 : 0;
        var prevMonth = (currentMonth > 0) ? currentMonth - 1 : 0;

        var milestoneXmlHttp = new XMLHttpRequest();
        var playPlanXmlHttp = new XMLHttpRequest();

        // var milestoneUrl = "https://production2.joyboxdev.com/api/v1/products/search?month=" + currentMonth + "&filter=milestones";
        var milestoneUrl = "https://api.joyboxdev.com/products/search?month=" + currentMonth + "&filter=milestones";

        // var playPlanUrl = "https://production2.joyboxdev.com/api/v1/products/search?month=" + currentMonth + "&filter=playplans";
        var playPlanUrl = "https://api.joyboxdev.com/products/search?month=" + currentMonth + "&filter=playplans";

        var toyStoreUrl = '<?php echo site_url(); ?>' + "/toy-store/" + currentMonth;


        milestoneXmlHttp.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200) {
                weeSchoolProducts(this.responseText, " Great products for this month's milestones", "milestone-products");
            }
        }

        milestoneXmlHttp.open("GET", milestoneUrl, true);
        milestoneXmlHttp.setRequestHeader("Authorization", "Token token=eQCCVD2nwcnTJEh_rl7VOQ");
        milestoneXmlHttp.send();

        playPlanXmlHttp.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200) {
                weeSchoolProducts(this.responseText, "Toys and books used by this month's Play Plans", "play-plan-products");
            }
        }

        playPlanXmlHttp.open("GET", playPlanUrl, true);
        playPlanXmlHttp.setRequestHeader("Authorization", "Token token=eQCCVD2nwcnTJEh_rl7VOQ");
        playPlanXmlHttp.send();

        function weeSchoolProducts(response, productsHeading, productDiv ) {
            var prods = JSON.parse(response);
            var i;
            var out = ( prods.data.length >= 1 ? "<h2>" + productsHeading + "</h2> " : "") + "<ul class='inline-list'>";
            for(i = 0; i < prods.data.length; i++) {
                if (i == 3) {
                    out += "<div class='more-products'>"
                } else { }
                out += "<li class='col-xs-7 col-sm-5'><a href='" +
                prods.data[i].linkToStore +
                "' target='_blank'><img src='" +
                prods.data[i].image +
                "'/><summary><h3>" +
                prods.data[i].name +
                "</h3>"
                out += (prods.data[i].maker) ? "<h3>By: " + prods.data[i].maker + "</h3>" : "";
                out += (prods.data[i].play_plan) ? "<h4>Play Plan: " + prods.data[i].play_plan + "</h4>" : "";
                out += (prods.data[i].milestone) ? "<h4>Milestone: " + prods.data[i].milestone + "</h4>" : "";
                out += "</summary></a></li>";
                if (prods.data.length > 2 && i == prods.data.length) {
                    out += "</div>"
                } else { }
            }
            
            out += "</ul><button class='more btn btn-default center'" + (i <= 3 ? " style='display: none;'" : "") + ">See More <span class='glyphicon glyphicon-menu-down'></span></button>";

            document.getElementById(productDiv).innerHTML = out;

            var items = jQuery(".product-grid li");

            if (document.documentElement.clientWidth < 768) {
            	var cols = 2;
            } else {
            	var cols = 3;
            }

            for(var i = 0; i < prods.data.length; i+=cols) {
              items.slice(i, i+cols).wrapAll("<div class='row'></div>");
            }

    }

    var monthButtonList = document.getElementById( 'month-buttons' );
    var monthOptions = document.getElementById( 'month-options' );
    var monthButtons = "<li><button id='prev' class='btn-prev' onclick='loadDoc(" + parseInt(currentMonth - 1) + ")'></button></li>";
    var monthSelects = "";
    var maxlen = 37;

    for(i = 0; i < months.length; i++) {
        monthButtons += "<li><button class='btn' onclick='loadDoc(" + months[i] + ")' data-month='" + months[i] + "' >" + months[i] + "</button></li>";
    }

    for(i = 0; i < maxlen; i++) {
        monthSelects += "<option value='" + i + "' >Month: " + i + "</option>";
    }

    monthButtons += "<li><button id='next' class='btn-next' onclick='loadDoc(" + parseInt(currentMonth + 1) + ")'></button></li>";

    monthButtonList.innerHTML = monthButtons;
    monthOptions.innerHTML = monthSelects;
    
    var birthMonthBtns = jQuery("body").find('[data-month="0"]');
    [].slice.call( birthMonthBtns ).forEach(function ( birthMonthBtns ) {
        birthMonthBtns.innerHTML = "Newborn";
    });
    
    jQuery("ul").find("[data-month='" + currentMonth + "']").addClass("current");
    jQuery("ul").find("[data-month='0']").addClass("auto-width");
    jQuery("#month-options").val(currentMonth);

    }

    jQuery(".more").live("click", "button", function(){
        event.preventDefault(); /* prevent the a from changing the url */
        jQuery(this).hide(); /* hide the read more button */
        jQuery(this).parents('.products').find('.more-products').addClass("auto-height");
    });

    jQuery("#month-options").change(function() {
	  loadDoc(jQuery(this).val());
	});

	loadDoc(currentMonth);
</script>

<?php get_footer();
