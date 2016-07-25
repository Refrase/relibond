<?php
/**
 * Template Name: Welcome
 */
?>

<!--//////////////////// Welcome \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-welcome' ); ?>>
  <article class="container-fluid">
    <div class="row page-welcome_firstRow">

      <div class="page-welcome_videoWithSound_wrap display-none">
        <iframe
          allowfullscreen
          frameborder="0"
          class="page-welcome_videoWithSound"
          id="page-welcome_videoWithSound"
          src=""
        ></iframe>
      </div>
      <!-- src-tag is set in main.js to autoplay video on click of button and stop on click on overlay  -->

      <div class="page-welcome_video_wrap">
        <video
          id="welcome_video"
          loop
          muted
          poster="<?php bloginfo('template_directory'); ?>/static/relibond-autoplay-video-poster-2.jpg"
          src="<?php bloginfo('template_directory'); ?>/static/relibond-autoplay-video.mp4"
        />
      </div>

      <h1 class="page-welcome_title">
        <div class="page-welcome_title_inner title-twoWeights-lastBold">
          <span><?php the_field( 'title-line-1' ); ?></span><br/>
          <span><?php the_field( 'title-line-2' ); ?></span>
        </div>

        <div class="page-welcome_button button button-primary">Watch the introduction</div>
      </h1>

    </div>
  </article>

  <article class="page-welcome_introduction container padding-topBottom padding-topBottom-4-1">
    <div class="page-welcome_introduction_inner row">
      <div class="col-sm-7">
        <p><?php the_content(); ?></p>
      </div>
      <div class="col-lg-2 col-lg-offset-4 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-1 col-xs-12">
        <img src="<?php bloginfo('template_directory'); ?>/static/logo.svg" class="page-welcome_introduction_logo">
      </div>
    </div>
  </article>

</section>
