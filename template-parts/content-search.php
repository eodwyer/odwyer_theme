<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package odwyer
 */
?>

<article id="<?php the_ID(); ?>" <?php post_class("post-content-card"); ?>>
  <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail(); ?>
  <?php else: ?>
    <div class="post-content-card__img-fallback"></div>
  <?php endif; ?>
  <div class="post-content-card__overlay">
    <header>
      <?php
        the_title(
          sprintf(
            '<h2 class="post-content-card__title"><a class="post-content-card__link" href="%s" rel="bookmark">',
            esc_url( get_permalink() ) ), '</a></h2>'
          );
      ?>
    </header><!-- .entry-header -->
    <div class="post-content-card__content">
      <?php
      the_excerpt();
      ?>
    </div><!-- .entry-content -->
  </div>
</article>
