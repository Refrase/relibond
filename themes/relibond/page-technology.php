<?php
/**
 * Template Name: Technology
 */
?>

<!--//////////////////// Technology \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-technology' ); ?>>
  <article class="container padding-topBottom padding-topBottom-6-1">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="page-technology_title textAlign-center title-twoWeights">
          <span><?php the_field( 'title-line-1' ); ?></span><br/>
          <span><?php the_field( 'title-line-2' ); ?></span>
        </h1>
      </div>
    </div>

    <div class="row margin-top margin-top-3-1">
      <div id="page-technology_advantage-1" class="page-technology_advantage col-sm-8 col-md-6">
        <h3 class="page-technology_advantage-1_title color-brandSecond"><?php the_field( 'advantage-1-title' ); ?></h3>
        <p><?php the_field( 'advantage-1-text' ); ?></p>
      </div>
    </div>

    <div class="row margin-top margin-top-4-1">
      <div id="page-technology_advantage-2" class="page-technology_advantage page-technology_advantage-2 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6">
        <h3 class="page-technology_advantage-2_title color-brandFirst"><?php the_field( 'advantage-2-title' ); ?></h3>
        <p><?php the_field( 'advantage-2-text' ); ?></p>
      </div>
    </div>

    <div class="row margin-top margin-top-5-1">
      <div id="page-technology_advantage-3" class="page-technology_advantage page-technology_advantage-3 col-sm-8 col-md-6 col-md-offset-1">
        <h3><?php the_field( 'advantage-3-title' ); ?></h3>
        <p class="page-technology_advantage-3_text"><?php the_field( 'advantage-3-text' ); ?></p>
      </div>
    </div>
  </article>

  <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/static/martin-og-christian-vaerksted-wide.jpg" />

</section>
