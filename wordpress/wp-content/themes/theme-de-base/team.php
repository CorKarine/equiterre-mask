<?php 
/**
 * 	Template Name: Équipe
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
		<div class="equipe">
			
		<?php

  $equipe = new WP_Query('post_type=equipe');
  while ($equipe->have_posts()) : $equipe->the_post();
?>
 <div class="equipe--membre"  data-bs-toggle="modal" data-bs-target="#modal--<?php the_title(); ?>" id="membre--<?php the_title(); ?>">
      <img class="equipe--img" src="https://pm1.narvii.com/6941/cb1212ac9645cb3a4b75b3e356c1b18369e972ebr1-1365-2048v2_hq.jpg" alt="Daily Mix 5">
      <h2 class="equipe--nom"><?php the_title(); ?></h2>
      <div class="equipe--poste"><?php the_field('poste'); ?></div>
    </div>

	<div class="modal fade" id="modal<?php the_title(); ?>" tabindex="-1" >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title titleCreatrice"><?php the_title(); ?></h2>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
		<?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>


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