<?php
/**
 * Template Name: Perspectives
 */
?>

<!--//////////////////// Perspectives \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-perspectives' ); ?>>
  <article class="container">
    <div class="row padding-topBottom padding-topBottom-6-1">

      <div class="col-xs-12">
        <h1 class="page-perspectives_title title-twoWeights">
          <span><?php the_field( 'title-line-1' ); ?></span><br/>
          <span><?php the_field( 'title-line-2' ); ?></span>
        </h1>
      </div>

      <div id="page-perspectives_text" class="page-perspectives_text col-md-5 margin-top">
        <p><?php the_content(); ?></p>
      </div>

      <div class="page-perspectives_video_wrap col-md-7">
        <iframe
          class="page-perspectives_video"
          allowfullscreen
          frameborder="0"
          src="https://www.youtube.com/embed/fBcwJmZ6qK0"
        ></iframe>
      </div>

    </div>
  </article>
</section>
