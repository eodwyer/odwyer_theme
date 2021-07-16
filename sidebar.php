<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package odwyer
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
 return;
}
?>

<aside id="secondary" class="site-sidebar widget-area">
  <div class="site-sidebar__inner">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div>
</aside><!-- #secondary -->
