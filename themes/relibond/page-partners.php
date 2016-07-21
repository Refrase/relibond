<?php
/**
 * Template Name: Partners
 */
?>

<!--//////////////////// Partners \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-partners' ); ?>>
  <article class="container">

    <h3 class="page-partners_title">Partners</h3>

    <div class="row padding-topBottom padding-topBottom-2-1">

      <?php
        $args = array(
          'post_type' => 'partner',
          'orderby' => 'order',
          'order'   => 'ASC',
        );
        $query = new WP_Query( $args );

        if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="page-partners_logo_wrap col-sm-6 col-md-4">
          <?php the_post_thumbnail( 'full', array('class' => 'page-partners_logo img-responsive') ); ?>
        </div>

      <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>

  </article>
</section>
