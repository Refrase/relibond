<?php
/**
 * Template Name: Page Onepager
 */

get_header(); ?>

  <!-- <div class="splash">
    <img class="splash_logo" src="<?php bloginfo('template_directory'); ?>/static/logo.svg">
  </div> -->

  <!-- Fetch pages, ascending -->
  <?php $args = array( 'post_type' => 'page', 'order' => 'ASC' );
        $the_query = new WP_Query( $args ); ?>

  <!-- Show pages with different page-tamplates -->
  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php if ( $post->post_name === 'welcome' ) { ?>
      <?php get_template_part( 'page', 'welcome' ); ?>
    <?php } ?>

    <?php if ( $post->post_name === 'technology' ) { ?>
      <?php get_template_part( 'page', 'technology' ); ?>
    <?php } ?>

    <?php if ( $post->post_name === 'perspectives' ) { ?>
      <?php get_template_part( 'page', 'perspectives' ); ?>
    <?php } ?>

    <?php if ( $post->post_name === 'partners' ) { ?>
      <?php get_template_part( 'page', 'partners' ); ?>
    <?php } ?>

    <?php if ( $post->post_name === 'contactandjobs' ) { ?>
      <?php get_template_part( 'page', 'contactandjobs' ); ?>
    <?php } ?>

  <?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>
