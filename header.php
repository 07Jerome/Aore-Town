<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aore_Town
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width+device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="profile" href="http://gmpg.org/xfn//11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="main_header">
      <div class="container-fluid">
	 
      <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar">
	  <a class="navbar-brand" href="#">
	  <?php 
		$mainlogo = get_field('logo', 'option');
		if( !empty( $mainlogo ) ): ?>
			<img src="<?php echo esc_url($mainlogo['url']); ?>" alt="<?php echo esc_attr($mainlogo['alt']); ?>" />
		<?php endif; ?>
		</a>
		 <!-- Toggler/collapsibe Button -->
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
			<span class="fas fa-bars"></span>
		</button>
          <!-- <div class="hamburger_menu">
            <i class="fas fa-bars toggle"></i>
            <i class="fas fa-times toggle"></i>
          </div> -->
			<div class="collapse navbar-collapse" id="navbarNav">
				<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' =>	false,
							'menu_class'	=>	'navbar-nav',
							'walker'	=>	new aore_Walker_Nav_Primary()
						) );
					?>
			</div>
			<div class="contact_number d-lg-block d-sm-none d-xs-none">
					<a href="#">+61-415-415575</a>
			</div>
	 </nav>
	 </div>
  </header>
  