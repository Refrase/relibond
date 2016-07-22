<?php
/**
 * Template Name: Contact & Jobs
 */
?>

<!--//////////////////// Contact & Jobs \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-contactAndJobs' ); ?>>
  <article class="container padding-topBottom padding-topBottom-6-1">
    <div class="row">

      <div class="col-xs-12">
        <h1 class="page-contactAndJobs_title"><?php the_field( 'title-line-1' ); ?></h1>
      </div>

    </div>
    <div class="row">

      <div class="page-contactAndJobs_companyMeta col-md-4 margin-top">
        <h5 class="page-contactAndJobs_companyMeta_title"><?php the_field( 'company-name' ); ?></h5>
        <ul class="page-contactAndJobs_companyMeta_list">
          <li><?php the_field( 'company-street' ); ?></li>
          <li><?php the_field( 'company-city' ); ?></li>
          <li><?php the_field( 'company-country' ); ?></li>
          <li><?php the_field( 'company-mail' ); ?></li>
          <li><?php the_field( 'company-cvr' ); ?></li>
        </ul>
      </div>

    </div>

    <div class="row margin-top-6-1">

      <?php
        $args = array(
          'post_type' => 'employee',
          'orderby' => 'order',
          'order'   => 'ASC',
        );
        $query = new WP_Query( $args );

        if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="col-sm-6 col-sm-offset-0 col-md-4">
          <?php include 'employee.php'; ?>
        </div>

      <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
  </article>
</section>
