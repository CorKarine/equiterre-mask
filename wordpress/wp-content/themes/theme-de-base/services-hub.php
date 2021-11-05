<?php 
/**
 * 	Template Name: Hub de services
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

<?php get_template_part( 'partials/description' ); // Affiche partials/404.php ?>
<div class="hubService">
    <?php
  $serviceHub = new WP_Query('post_type=service'); // 👈 Utilisation
  while ($serviceHub->have_posts()) : $serviceHub->the_post(); 
?>
	<a href="<?php the_permalink(); ?>" class="hubService__carte">
	
	<div class="hubService__carte__img">
	<img src="<?php echo get_the_post_thumbnail_url();?>">
	</div>
	<div class="hubService__carte__info">
	<h3 class="carte--titre"><?php the_title(); ?></h3>
	<div class="carte--desc">
	<?php the_field('description'); ?>
    </div>
	</div>
	</a>
    <?php
  endwhile; 
  wp_reset_postdata(); 
?>
</div>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>