<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package odwyer
 * Template Name: Homepage
 */

get_header();
?>
  <main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();
    ?>
      <div class="home-grid entry-content">
        <div class="site-branding">
        <?php the_custom_logo(); ?>
        <div class="site-branding__text">
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
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
        <?php the_content(); ?>
      </div><!-- .entry-content -->
    <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->

<?php
get_footer();
