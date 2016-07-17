<?php
/**
 * Template Name: Page Onepager
 */

get_header(); ?>

  <!-- Fetch pages, ascending -->
  <?php $args = array( 'post_type' => 'page', 'order' => 'ASC' );
        $the_query = new WP_Query( $args ); ?>

  <!-- Show pages with different page-tamplates -->
  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php if ( $post->post_name === 'welcome' ) { ?>
      <?php get_template_part( 'page', 'welcome' ); ?>
    <?php } ?>

  <?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>