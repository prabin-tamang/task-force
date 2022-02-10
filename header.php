<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(). '/css/hamburgers.css' ?>" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<header>

	<div class="topbar">	

		<div class="topbar-content container-fluid d-flex align-items-center">

			<span><img src="<?php echo get_template_directory_uri(). '/images/megaphone.png' ?>">Energy Price Rise - White Paper Now Available To Download</span>

			<div class="get-in-touch-btn"><a href="#"><svg fill="#0788b5" height="16" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> Get in touch</a></div>
			
		</div>

	</div>

		<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container-fluid">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
					<!-- end custom logo -->

				<button class="navbar-toggler  hamburger hamburger--collapse" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="hamburger-box">

							<span class="hamburger-inner"></span>

						</span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

		<?php if ( is_front_page() ) : ?>

<div class="hero">

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			
			<div class="carousel-inner">

				<div class="carousel-item active">

					<div class="container-fluid">

						<div class="row">

							<div class="slider-content col-sm-12 col-md-12 col-lg-12 col-xl-6 col d-flex justify-content-center">

								<h1 class="slider-heading">Water and Energy Taskforce</h1>
									
								<p class="slider-sub-heading">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictrum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestoibulum ac diam sit amet quam vechicula elementum sed sit amed dui.</p>

								<div class="slider-btn">
									<a href="#">Find Out More</a>
								</div>

							</div>
						
								<div class="slider-img col-sm-12 col-md-12 col-lg-12 col-xl-6 ">
									<img sizes="(max-width: 2560px) 100vw, 2560px"
								srcset="<?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_480.jpg'?> 480w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_827.jpg'?> 827w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_1107.jpg'?> 1107w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_1304.jpg'?> 1304w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_1519.jpg'?> 1519w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_1727.jpg'?> 1727w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_1857.jpg'?> 1857w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_2016.jpg'?> 2016w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_2126.jpg'?> 2126w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_2149.jpg'?> 2149w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_2174.jpg'?> 2174w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_2303.jpg'?> 2303w, <?php echo get_template_directory_uri().'/images/homepage-image-1_jmlr4h_c_scale_w_2560.jpg'?> 2560w"
								src="<?php echo get_template_directory_uri(). '/images/homepage-image-1_jmlr4h_c_scale_w_2560.jpg'?>"
								alt="Father and Daughter Washing Hands">
								</div>

						</div>
						
					</div>

			</div>

				<div class="carousel-item">

					<div class="container-fluid">

						<div class="row">

							<div class="slider-content col-sm-12 col-md-12 col-lg-12 col-xl-6 col d-flex justify-content-center">

								<h1 class="slider-heading">Water and Energy Taskforce 2</h1>
									
								<p class="slider-sub-heading">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictrum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestoibulum ac diam sit amet quam vechicula elementum sed sit amed dui.</p>

								<div class="slider-btn">
									<a href="#">Find Out More</a>
								</div>

							</div>
						
								<div class="slider-img col-sm-12 col-md-12 col-lg-12 col-xl-6">
									
								<img sizes="(max-width: 3000px) 100vw, 3000px"
										srcset="<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_480.jpg'?> 480w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_783.jpg'?> 783w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_1029.jpg'?> 1029w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_1261.jpg'?> 1261w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_1445.jpg'?> 1445w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_1641.jpg'?> 1641w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_1817.jpg'?> 1817w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_1973.jpg'?> 1973w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2123.jpg'?> 2123w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2257.jpg'?> 2257w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2380.jpg'?> 2380w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2520.jpg'?> 2520w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2640.jpg'?> 2640w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2748.jpg'?> 2748w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2864.jpg'?> 2864w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2952.jpg'?> 2952w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_2999.jpg'?> 2999w,<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_3000.jpg'?> 3000w"
										src="<?php echo get_template_directory_uri(). '/images/homepage-image-2_h8r4bp_c_scale_w_3000.jpg'?>"
										alt="Wind Turbines">
							
							</div>

						</div>
						
					</div>

			</div>
				
		</div>
			
				<div class="carousel-controls">

						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

						<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M0,0H24V24H0Z" fill="none"/><path d="M15.41,7.41,14,6,8,12l6,6,1.41-1.41L10.83,12Z" fill="#fff"/></svg>

						<span class="sr-only">Previous</span>

					</a>

					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

					
						<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M0,0H24V24H0Z" fill="none"/><path d="M10,6,8.59,7.41,13.17,12,8.59,16.59,10,18l6-6Z" fill="#fff"/></svg>

						<span class="sr-only">Next</span>

					</a>

				</div>

			</div>

</div>

				<div class="tf">
					
					<div class="container">

						<div class="row">

								<div class="tf-col col-lg-4  d-flex justify-content-center"><img src="<?php echo get_template_directory_uri(). '/images/id-card.png'?>"><h4 class="tf-heading">Task force Contacts</h4></div>

								<div class="tf-col div col-lg-4 d-flex justify-content-center"><img src="<?php echo get_template_directory_uri(). '/images/doc.png'?>"><h4 class="tf-heading">Task force Tasks</h4></div>

								<div class="tf-col div col-lg-4 d-flex"><img src="<?php echo get_template_directory_uri(). '/images/promotion.png'?>"><h4 class="tf-heading">Task force News</h4></div>

						</div>
					
					</div>

				</div>

					<div class="tf-hr"></div>

			<?php endif; ?>

</header>