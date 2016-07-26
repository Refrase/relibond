<?php
/**
 * Template Name: Partners
 */
?>

<!--//////////////////// Partners \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-partners' ); ?>>
  <article class="container">

    <div class="row padding-topBottom padding-topBottom-2-1">

      <h2 class="page-partners_title"><?php the_title(); ?></h2>

      <?php
        $args = array(
          'post_type' => 'partner',
          'orderby' => 'order',
          'order'   => 'ASC',
        );
        $query = new WP_Query( $args );

        if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

        $i = $query->current_post + 1; ?>

        <div
          id="<?php echo 'page-partners_logo_wrap-' . $i; ?>"
          class="page-partners_logo_wrap col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-4">
          <?php the_post_thumbnail( 'full', array('class' => 'page-partners_logo img-responsive') ); ?>
        </div>

      <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>

  </article>
</section>
