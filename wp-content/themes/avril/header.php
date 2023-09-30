<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	
	<div class="videoContainer">
  <video id="video1" class="video" autoplay muted>
    <source src="http://localhost/SMNIK/wp-content/uploads/2023/09/beatifulearth.1920x1080.mp4" type="video/mp4">
  </video>

  <video id="video2" class="video hide" muted>
    <source src="http://localhost/SMNIK/wp-content/uploads/2023/09/mylivewallpapers.com-Earth.mp4" type="video/mp4">
  </video>
	</div>
	
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'avril' ); ?></a>
	
	<?php get_template_part('template-parts/sections/section','header'); ?>
	
	<div id="content" class="avril-content">
	