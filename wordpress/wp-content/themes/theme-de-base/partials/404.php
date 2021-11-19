<div class='E404'>
    <div class="textblock">
      <?php  $servicePlus = new WP_Query( array( 'post_type' => 'footer', 'meta_value' => 'Footer' ) );
  while ($servicePlus->have_posts()) : $servicePlus->the_post();  ?>
        <h1 class="erreur">
            <?php the_field('erreur_404_titre'); ?>
        </h1>
        <h4 class="text"><?php the_field('erreur_404_texte'); ?></h4>
        <?php
      endwhile; 
  wp_reset_postdata(); 
?>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/PlantDoodle.png" alt="PlantDoodle" width="500"
        height="333" class="plant">
</div>