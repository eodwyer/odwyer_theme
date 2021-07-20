<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package odwyer
 */

?>

 <footer id="colophon" class="site-footer">
  <div class="site-info">
   <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'odwyer' ) ); ?>">
    <?php
    /* translators: %s: CMS name, i.e. WordPress. */
    printf( esc_html__( 'Proudly powered by %s', 'odwyer' ), 'WordPress' );
    ?>
   </a>
   <span class="sep"> | </span>
    Background by <a href="https://unsplash.com/@pawel_czerwinski">Pawel Czerwinski</a>
  </div><!-- .site-info -->
 </footer><!-- #colophon -->
</div><!-- #page -->

<div class="color-palette" style="display: none;">
 <div class="color-palette__swatch color-palette__swatch--alpha">Alpha</div>
 <div class="color-palette__swatch color-palette__swatch--beta">Beta</div>
 <div class="color-palette__swatch color-palette__swatch--gamma">Gamma</div>
 <div class="color-palette__swatch color-palette__swatch--delta">Delta</div>
 <div class="color-palette__swatch color-palette__swatch--epsilon">epsilon</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
