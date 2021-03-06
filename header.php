<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boni_Maddison
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bonimaddison' ); ?></a>
		<section>
		<div class="left-column-contact">
		<?php
			if( function_exists('get_field') ){
				echo '<p class="contact-title">Contact Us</p>';
				if( get_field('contact_phone_number', 'option') ){
					echo '<p class="contact-phone-number">'; the_field('contact_phone_number', 'option'); echo '</p>';
				}
				
				if( get_field('contact_email', 'option') ){
					echo '<p class="contact-email">'; the_field('contact_email', 'option'); echo '</p>';
				}

				if( get_field('contact_address', 'option') ){
					echo '<div class="contact-address">'; 
					echo the_field('contact_address', 'option'); 
					echo '</div>';
				}
			}
			?>
			</div> 
			<!-- End Of Left Column -->
			<div class="close-contact">
				<button>
					close
					<span></span>
					<span></span>
				</button>
			</div>
		</section>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$bonimaddison_description = get_bloginfo( 'description', 'display' );
			if ( $bonimaddison_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bonimaddison_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bonimaddison' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
