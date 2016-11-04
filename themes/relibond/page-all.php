<?php
/**
 * Template Name: Page Onepager
 */

get_header(); ?>

  <!-- <div class="splash">
    <img class="splash_logo" src="<?php bloginfo('template_directory'); ?>/static/logo.svg">
  </div> -->

  <!-- Fetch pages, ascending -->
  <?php

    $args = array( 'post_type' => 'page', 'order' => 'ASC' );
    $the_query = new WP_Query( $args );
    if ( have_posts() ) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
          if ( $post->post_name === 'welcome' )       { get_template_part( 'page', 'welcome' ); }
          if ( $post->post_name === 'technology' )    { get_template_part( 'page', 'technology' ); }
          if ( $post->post_name === 'perspectives' )  { get_template_part( 'page', 'perspectives' ); }
          if ( $post->post_name === 'partners' )      { get_template_part( 'page', 'partners' ); }
          if ( $post->post_name === 'contact-jobs' )  { get_template_part( 'page', 'contactandjobs' ); }
          if ( $post->ID > 41 )                       { get_template_part( 'page' ); } // Original pages have IDs below 41
      }
    }

  ?>

<?php get_footer(); ?>
