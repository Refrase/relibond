<?php
/**
 * Template Name: Welcome
 */
?>

<!--//////////////////// Video \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-welcome' ); ?>>
  <div class="container-fluid">
    <article class="row">

      <!-- <iframe id="welcome_video" src="https://www.youtube.com/embed/tKQNenGV4ZU" frameborder="0" allowfullscreen autoplay mute></iframe> -->

      <div class="page-welcome_video_wrap">
        <video
          autoPlay
          loop
          muted
          poster="<?php bloginfo('template_directory'); ?>/static/relibond-autoplay-video-poster.jpg"
          src="<?php bloginfo('template_directory'); ?>/static/relibond-autoplay-video.mp4"
          id="welcome_video" />
      </div>

      <h1 class="page-welcome_title"><?php the_title(); ?></h1>

    </article>
  </div>
</section>
