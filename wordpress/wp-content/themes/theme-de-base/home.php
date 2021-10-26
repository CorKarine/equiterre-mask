<?php 
/**
 * 	Template Name: Accueil
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		<div class="accueil">
    <div class="accueil__header">
      <div class="accueil__header__constraste"></div>
      <div class="swiper-container accueil__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
			<?php 
  				$carrousel1 = get_field('carrousel1');
  				$urlc1 = $carrousel1['url'];
  				$altc1 = $carrousel1['alt'];
			?>
			  <?php 
  				$carrousel1pte = get_field('carrousel1-pte');
  				$urlc1p = $carrousel1pte['url'];
  				$altc1p = $carrousel1pte['alt'];
			?>
              <source srcset="<?php echo $urlc1p; ?>" media="(max-width: 992px)">
              <img src="<?php echo $urlc1; ?>">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
			<?php 
  				$carrousel2 = get_field('carrousel2');
  				$urlc2 = $carrousel2['url'];
  				$altc2 = $carrousel2['alt'];
			?>
			  <?php 
  				$carrousel2pte = get_field('carrousel2-pte');
  				$urlc2p = $carrousel2pte['url'];
  				$altc2p = $carrousel2pte['alt'];
			?>
              <source srcset="<?php echo $urlc2p; ?>" media="(max-width: 992px)">
              <img src="<?php echo $urlc2; ?>">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
			<?php 
  				$carrousel3 = get_field('carrousel3');
  				$urlc3 = $carrousel3['url'];
  				$altc3 = $carrousel3['alt'];
			?>
			  <?php 
  				$carrousel3pte = get_field('carrousel3-pte');
  				$urlc3p = $carrousel3pte['url'];
  				$altc3p = $carrousel3pte['alt'];
			?>
              <source srcset="<?php echo $urlc3p; ?>" media="(max-width: 992px)">
              <img src="<?php echo $urlc3; ?>">
            </picture>
          </div>
        </div>
        <div class="swiper-button-next accueil__swiper__btn"></div>
        <div class="swiper-button-prev accueil__swiper__btn"></div>
      </div>
      <div class='accueil__header__texte'>
        <div class='accueil__header__titre'>
          Équiterre
        </div>
        <div class='accueil__header__sousTitre'>
          Changer le monde un geste à la fois.
        </div>
      </div>
    </div>
	<div class='accueil__services'>
      <div class='service service--un'>
        <img class='service--media' src='sources/medias/school.png'>
        <div class='service--titre'>École ouverte</div>
        <div class='service--desc'>Équiterre s’est vu confier par le MEES de créer une nouvelle rubrique sur
          l’alimentation qui s’ajoute en complément du parcours d’exploration éducatif.</div>
        <a href='###' class='service--bouton'>EN SAVOIR PLUS</a>
      </div>

      <div class='service service--deux'>
        <img class='service--media' src='sources/medias/vegetable.png'>
        <div class='service--titre'>Exigez local</div>
        <div class='service--desc'> Il n’est pas toujours facile de dénicher les fruits et légumes d’ici.
          Voici un mode d’emploi pratique afin d’exiger plus d’aliments locaux.</div>
        <a href='###' class='service--bouton'>EN SAVOIR PLUS</a>
      </div>

      <div class='service service--trois'>
        <img class='service--media' src='sources/medias/salad.png'>
        <div class='service--titre'>Recettes</div>
        <div class='service--desc'>Vous ne savez pas quoi faire de votre bette à carde? Vous trouverez ici les recettes
          qui vont mettre en valeur vos paniers de légumes.</div>
        <a href='###' class='service--bouton'>EN SAVOIR PLUS</a>
      </div>
    </div>
	</div> <!--fin du div de l'acceuil-->
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>