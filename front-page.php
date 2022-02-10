<?php
	/**
	 * Template Name: Homepage Template
	 *
	 * Template for displaying a page without sidebar even if a sidebar widget is published.
	 *
	 * @package UnderStrap
	 */
	
	// Exit if accessed directly.
	defined( 'ABSPATH' ) || exit;
	
	get_header();
	$container = get_theme_mod( 'understrap_container_type' );
	
	if ( is_front_page() ) {
	     get_template_part( 'global-templates/hero' );
	}
	?>
<div id="content">

<div id="primary">

	<main class="site-main" id="main" role="main">

          <div class="container">
				

          </div>

	</main> <!-- #main -->

	</div><!-- #primary -->

</div>

<!-- content -->
<?php
get_footer();