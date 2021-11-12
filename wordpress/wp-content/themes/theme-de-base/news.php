<?php 
/**
 * 	Template Name: Nouvelle
 *  Template Post Type: post, page,
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
<?php endif; ?>
<!--met ton code ici-->
<div class="detailnouvelle">
    <div class="nouvelleBackground cat--<?php
			$category = get_the_category();
			echo $category[0]->cat_name;
			?>">
        <div class="blocImageCategorie">
            <h5 class="categorieNouvelle"> <?php
			$category = get_the_category();
			echo $category[0]->cat_name;
			?></h5>
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="arc" class="nouvelleImage">
        </div>
        <div class="blocTitreNouvelle">
            <h1 class="nouvelleTitre"> <?php the_title(); ?></h1>
            <h3 class="blocPublie"><?php the_date(); ?></h3>
            <h3 class="blocAuteur"><?php the_author(); ?></h3>
        </div>
        <div class="nouvelleContraste">
        </div>

    </div>
    <?php get_template_part( 'partials/description' ); // Affiche partials/404.php ?>

    <div class="autreNouvelle">
        <?php
  $nouvelle = new WP_Query( array( 'post__not_in' => array( $post->ID ),'posts_per_page' => 3) ); // 👈 Utilisation
  while ($nouvelle->have_posts()) : $nouvelle->the_post(); 
?>
        <a href="<?php the_permalink(); ?>">
            <div class="lienNouvelle">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="nImage"> 
                <h2 class="lienTitre"><?php $title = get_the_title(); echo mb_strimwidth($title, 0, 60, '...');?></h2>
            </div>
        </a>
        <?php
  endwhile; 
  wp_reset_postdata(); 
?>
    </div>
</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>