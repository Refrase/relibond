<div class="employee">
  <?php the_post_thumbnail( 'full', array( 'class' => 'employee_image img-responsive' ) ); ?>
  <h5 class="margin-top"><?php the_title(); ?></h5>
  <p><?php the_field( 'education' ); ?></p>
  <span class="employee_divider"></span>
  <p><?php the_field( 'title' ); ?></p>
  <span class="employee_divider"></span>
  <p><?php the_field( 'mail' ); ?></p>
  <p><?php the_field( 'phone' ); ?></p>
</div>