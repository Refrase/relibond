<?php
/**
 * Template Name: Contact & Jobs
 */
?>

<!--//////////////////// Contact & Jobs \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-contactAndJobs' ); ?>>
  <article class="container padding-topBottom padding-topBottom-4-1">
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
          <li><a href="mailto:<?php the_field( 'company-mail' ); ?>"><?php the_field( 'company-mail' ); ?></a></li>
          <li><?php the_field( 'company-cvr' ); ?></li>
        </ul>
      </div>

    </div>

    <div class="row margin-top-4-1">

      <?php
        $args = array(
          'post_type' => 'employee',
          'orderby' => 'order',
          'order'   => 'ASC',
        );

        $query = new WP_Query( $args );

        if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

        $i = $query->current_post + 1; ?>

        <div id="<?php echo 'page-contactAndJobs_employee_wrap-' . $i; ?>"
          class="page-contactAndJobs_employee_wrap col-sm-6 col-sm-offset-0 col-md-4">
          <?php include 'employee.php'; ?>
        </div>

      <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>

    <div class="row margin-top-4-1">
      <div class="col-md-4">
        <h4>Want to work with us?</h4>
        <p>We are currently looking for collegues with competencies in the following areas:</p>
        <ul class="page-contactAndJobs_jobareas_list margin-top">
          <li>Business Development</li>
          <li>Material Science</li>
          <li>HV Electrical Engineering</li>
        </ul>
      </div>

      <div class="page-contactAndJobs_form_wrap col-md-8">
        <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
      </div>
    </div>
  </article>
</section>
