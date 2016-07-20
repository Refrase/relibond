<?php
/**
 * Template Name: Welcome
 */
?>

<!--//////////////////// Video \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-welcome container-fluid' ); ?>>
  <article class="row page-welcome__inner">

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
        autoPlay
        id="welcome_video"
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

  </article>
</section>
