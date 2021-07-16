<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package odwyer
 */
?>

<article id="<?php the_ID(); ?>" class="gutenberg-single-post">
  <?php the_post_thumbnail(); ?>
  <div class="gutenberg-single-post__overlay">
    <header>
      <?php
        the_title(
          sprintf(
            '<h3 class="gutenberg-single-post__title"><a class="gutenberg-single-post__link" href="%s" rel="bookmark">',
            esc_url( get_permalink() ) ), '</a></h3>'
          );
      ?>
    </header><!-- .entry-header -->
    <div class="gutenberg-single-post__content">
      <?php
      the_excerpt();
      ?>
    </div><!-- .entry-content -->
  </div>
</article>
