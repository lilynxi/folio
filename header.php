<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *  
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php

	if ( ! function_exists( 'wp_body_open' ) ) {
		
		function wp_body_open() {
			do_action( 'wp_body_open' );
		}
	}
	
?>
	
<div id="page" class="site">
	
	<div class="page-click-capture"></div>
	
	<header id="masthead" class="<?php echo esc_attr( kraft_header_classes() ); ?>" role="banner">		
		
			<div class="wrap">
					
				<?php get_template_part( 'template-parts/header/site-branding' ); ?>
				
				</span></span>
				
				<?php if ( has_nav_menu( 'main-menu' ) ) {
						get_template_part( 'template-parts/header/navigation', 'top' );
				} ?>
				
				<span id="ham-trigger-wrap" class="ham-trigger-wrap"><span class="ham-trigger"><span></span>

			</div><!-- .wrap -->		

	</header><!-- #masthead -->
	
	
	<div class="site-content-contain">
		<div id="content" class="site-content">
