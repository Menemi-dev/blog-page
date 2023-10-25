<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="new-site-header new-container" role="banner">
    <div class="new-wrap">
      <nav class="nav-menu" role="navigation">
        <ul id="new-left-menu" class="menu">
          <li><a href="/">Home</a></li>
          <li><a href="/">Projects</a></li>
          <li><a href="/">Work</a></li>
          <li><a href="/">Our Clients</a></li>
        </ul>
      </nav>
      <a href="<?php echo get_site_url(); ?>"><?php the_custom_logo(); ?></a>
      <nav class="nav-menu" role="navigation">
        <ul id="new-right-menu" class="menu">
          <li><a href="/">News</a></li>
          <li><a href="/">Company</a></li>
          <li><a href="/">About us</a></li>
          <li><a href="/">Contact us</a></li>
        </ul>
      </nav>
      <img id="mobile-menu-icon" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/menu.png' ); ?>" alt="" >
    </div>
  </header>

