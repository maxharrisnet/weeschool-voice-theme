<?php
/**
 * The template for displaying the header.
 *
 * @package Base Theme
 * @since 0.1.0
 */
 ?>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W94SMW');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" />
 	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/weeschool.css" />
 	<title><?php wp_title(”); ?></title>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W94SMW"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header class="header"">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		  	<div class="col-sm-3">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			      	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/logo.svg" alt="weeschool logo" width="" height="" />
				  </a>
			    </div>
			 </div>
		  	<div class="col-sm-12">
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <div class="nav navbar-nav">
			      <?php
			        wp_nav_menu( array(
			          'theme_location' => 'primary',
			          'menu_class'     => 'primary-menu',
			         ) );
			      ?>
			      </div>
			    </div><!-- /.navbar-collapse -->
			</div>
		  </div><!-- /.container-fluid -->
		</nav>
	</header>