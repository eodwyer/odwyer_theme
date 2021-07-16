<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package odwyer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Martel:wght@400;700" rel="stylesheet"> 
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'odwyer' ); ?></a>

  <?php if(!is_page_template("homepage.php")): ?>
    <header id="masthead" class="site-header">
      <div class="site-branding">
        <?php
        the_custom_logo();
        ?>
        <div class="site-branding__text">
        <?php if ( is_front_page() || is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
          else :
            ?>
            <p class="h1 site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
          endif;
          $odwyer_description = get_bloginfo( 'description', 'display' );
          if ( $odwyer_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $odwyer_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
        </div><!-- .site-branding__text -->
      </div><!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'odwyer' ); ?></button>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'walker' => new icon_walker()
          )
        );
        ?>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
  <?php endif; ?>
