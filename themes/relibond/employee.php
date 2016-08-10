<div class="employee">
  <?php the_post_thumbnail( 'full', array( 'class' => 'employee_image img-responsive' ) ); ?>
  <h5 class="margin-top"><?php the_title(); ?></h5>
  <p><?php the_field( 'education' ); ?></p>
  <span class="employee_divider"></span>
  <p><?php the_field( 'title' ); ?></p>
  <span class="employee_divider"></span>
  <p><a href="mailto:<?php the_field( 'mail' ); ?>"><?php the_field( 'mail' ); ?></a></p>
  <p><?php the_field( 'phone' ); ?></p>
  <a href="<?php the_field( 'link-linkedin' ); ?>" class="margin-top">
    <img src="<?php bloginfo('template_directory'); ?>/ic/linkedin.svg" alt="Link to Linkedin" width="24" />
  </a>
</div>
