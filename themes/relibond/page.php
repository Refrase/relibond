<!--//////////////////// Default Page \\\\\\\\\\\\\\\\\\\\-->

<section id="<?php echo $post->post_name; ?>" <?php echo post_class( 'page-custom' ); ?>>
  <article class="container">
    <div class="row padding-topBottom padding-topBottom-2-1">
      <div class="col-xs-12">

        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

      </div>
    </div>
  </article>
</section>
