<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UTalk
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php $logo = get_theme_mod('utalk_header_logo', null); ?>

	        <div class="site-title">
	        	<?php if($logo) {
					$themelogo_size = getimagesize($logo);
				    $themelogo_width = $themelogo_size[0];
				    $themelogo_height = $themelogo_size[1];
					?>
	            	<a href="<?php echo esc_url( home_url() ); ?>" title="<?php esc_html(bloginfo('name')); ?>" rel="home">
	                    <img src="<?php echo esc_url( $logo ); ?>" width="<?php echo $themelogo_width/2; ?>" alt="<?php esc_html( bloginfo('name') ); ?>"/>
	            	</a>
	            <?php } else { ?>
	            	<?php if ( is_front_page() && is_home() ) { ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php } else { ?>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php } ?>
	            <?php } ?>
	        </div>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</header>

	<div id="content" class="site-content">
		<div class="row">
