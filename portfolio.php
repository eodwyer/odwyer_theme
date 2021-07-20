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
  * Template Name: Portfolio
 */

get_header();
?>

  <main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->

      <?php odwyer_post_thumbnail(); ?>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <?php if(have_rows('websites')): $index=1; ?>
        <div class='portfolio'>
          <?php while(have_rows('websites')): the_row(); ?>
            <div class='portfolio__item'>
              <?php $img=get_sub_field('thumbnail'); ?>
              <img 
                class="portfolio__item__img" 
                src="<?php echo $img['sizes']['large']; ?>"
                alt="" 
                height="333"
                width="500" 
              />
              <h2 class="portfolio__item__title"><?php the_sub_field('title'); ?></h2>
              
              <div class="portfolio__item__content">
                <div><?php the_sub_field('description'); ?></div>

              </div>
              <a class='portfolio__item__btn btn' href='<?php the_sub_field('site_url'); ?>' target='_blank' >
                View <span class="screen-reader-text"><?php the_sub_field('title'); ?></span> Live Site
              </a>
              
            </div>
            <?php $index++; ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    <?php endwhile; // End of the loop.?>
  </main><!-- #main -->

<?php
get_footer();
