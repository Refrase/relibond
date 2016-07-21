<?php
/**
 * Template Name: Contact & Jobs
 */
?>

<!--//////////////////// Contact & Jobs \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-contactAndJobs' ); ?>>
  <article class="container">
    <div class="row padding-topBottom padding-topBottom-6-1">

      <div class="col-xs-12">
        <h1 class="page-contactAndJobs_title"><?php the_field( 'title-line-1' ); ?></h1>
      </div>

    </div>
  </article>
</section>
