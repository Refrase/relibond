<?php
/**
 * Template Name: Welcome
 */
?>

<!--//////////////////// Video \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-welcome' ); ?>>
  <article class="container-fluid">
    <div class="row">

      <div class="page-welcome_videoWithSound_wrap">
        <iframe
          allowfullscreen
          frameborder="0"
          id="welcome_videoWithSound_wrap"
          src="https://www.youtube.com/embed/tKQNenGV4ZU"
        ></iframe>
      </div>

      <div class="page-welcome_video_wrap">
        <video
          id="welcome_video"
          autoplay
          loop
          muted
          poster="<?php bloginfo('template_directory'); ?>/static/relibond-autoplay-video-poster-2.jpg"
          src="<?php bloginfo('template_directory'); ?>/static/relibond-autoplay-video.mp4"
        />
      </div>

      <h1 class="page-welcome_title">
        <div class="page-welcome_title_inner">
          <span><?php the_field( 'title-line-1' ); ?></span><br/>
          <span><?php the_field( 'title-line-2' ); ?></span>
        </div>
      </h1>

    </div>
  </article>

  <article class="container padding-topBottom padding-topBottom-4-1">
    <div class="row page-welcome_introduction_inner">
      <div class="col-sm-7">
        <p><?php the_content(); ?></p>
      </div>
      <div class="col-lg-2 col-lg-offset-4 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-1 col-xs-12">
        <img src="<?php bloginfo('template_directory'); ?>/static/logo.svg" class="page-welcome_introduction_logo">
      </div>
    </div>
  </article>

</section>
