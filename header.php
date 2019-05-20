<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="top_header_bar">
					<div class="container">
						<?php header_top_nav(); ?>
					</div>
				</div>
				<div class="container">
					<div class="main_navbar_section">
					<div class="row align-items-center">
						<div class="col-lg-4">
					<!-- logo -->
					<div class="logo d-inline">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img class="w-75" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					</div>
					<!-- nav -->
					<div class="col-lg-8">

							<nav class="nav navbar-expand-md navbar-light mt-sm-4" role="navigation">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
  							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<?php main_header_nav(); ?>
							</div>
							</nav>
						</div>
					<!-- /nav -->
					</div>
					</div>
					</div>
			</header>
			<!-- /header -->
