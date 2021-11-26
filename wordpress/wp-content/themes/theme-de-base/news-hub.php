<?php 
/**
 * 	Template Name: Hub de nouvelles
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>

<?php get_template_part( 'partials/headerGeneral' ); // Affiche partials/404.php ?>

<?php endif; ?>
<?php  $servicePlus = new WP_Query( array( 'post_type' => 'footer', 'meta_value' => 'Footer' ) );
  while ($servicePlus->have_posts()) : $servicePlus->the_post();  ?>
<select class="ordre__nouvelle">
    <option value="desc"><?php the_field('nouvelle_recente'); ?></option>
    <option value="asc"><?php the_field('ancienne_nouvelle'); ?></option>
</select>
<div class="hubNouvelle" id="<?php the_field('langage'); ?>" >
</div>
<button class='plus__nouvelle'><?php the_field('bouton_nouvelle'); ?></button>
<?php
      endwhile; 
  wp_reset_postdata(); 
?>


<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>