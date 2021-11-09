<?php 
/**
 * 	Template Name: Services
 *  Template Post Type: post, page, service
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
		<div class="detailnouvelle">
		<div class="autreNouvelle">
        <?php
  $nouvelle = new WP_Query( array( 'post__not_in' => array( $post->ID ),'posts_per_page' => 3) ); // 👈 Utilisation
  while ($nouvelle->have_posts()) : $nouvelle->the_post(); 
?>
        <a href="<?php the_permalink(); ?>">
            <div class="lienNouvelle">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="nImage">
                <h2 class="lienTitre"><?php the_title(); ?></h2>
            </div>
        </a>
        <?php
  endwhile; 
  wp_reset_postdata(); 
?>
    </div></div>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>