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
                <?php the_content(); ?>
            </div>
            <div class='accueil__header__sousTitre'>
                <?php the_field('phrase_sous_titre'); ?>
            </div>
        </div>
    </div>
    <div class='accueil__services'>
        <?php
  $service = new WP_Query( array( 'post_type' => 'service', 'meta_value' => 'Accueil' ) ); // 👈 Utilisation
  while ($service->have_posts()) : $service->the_post(); 
?>
        <div class='service service--<?php the_field('index'); ?>'>
            <?php 
  				$icone = get_field('icone');
  				$urlicone = $icone['url'];
  				$alticone = $icone['alt'];
			?>
            <img class='service--media' src='<?php echo $urlicone; ?>'>
            <div class='service--titre'><?php the_title(); ?></div>
            <div class='service--desc'><?php the_field('description'); ?></div>
            <a href='<?php the_permalink(); ?>' class='service--bouton'> <?php  $servicePlus = new WP_Query( array( 'post_type' => 'footer', 'meta_value' => 'Footer' ) );
  while ($servicePlus->have_posts()) : $servicePlus->the_post();  ?> 
  <?php the_field('serviceplus'); ?>
  <?php
  endwhile; 
  wp_reset_postdata(); 
?>
</a>
        </div>
        <?php
  endwhile; 
  wp_reset_postdata(); 
?>
    </div>
    <div class="accueil__nouvelle">
        <div class="accueil__nouvelle__titre"> <?php the_field('titre_section_nouvelle'); ?></div>
        <div class="swiper-nouvelle">
            <div class="accueil__nouvelle__cartes swiper-wrapper">
                <?php
  $nouvelle = new WP_Query( array('orderby' => 'date','order'   => 'DESC' ,'posts_per_page' => 3) ); // 👈 Utilisation
  while ($nouvelle->have_posts()) : $nouvelle->the_post(); 
?>
                <div class="carte carte--1 swiper-slide">
                    <div class="carte__contraste"></div>
                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    <div class="carte__info">
                        <h4 class='carte__info__titre'><?php the_title(); ?></h4>
                        <div class='carte__info__desc'>
                            <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 90, '...');?></div>
                    </div>
                    <div class="carte__footer">
                        <p class="carte__footer__date"><?php echo get_the_date("Y-m-d"); ?></p>
                        <a href="<?php the_permalink(); ?>"><?php  $nouvellePlus = new WP_Query( array( 'post_type' => 'footer', 'meta_value' => 'Footer' ) );
  while ($nouvellePlus->have_posts()) : $nouvellePlus->the_post();  ?> 
  <?php the_field('nouvelleplus'); ?>
  <?php
  endwhile; 
  wp_reset_postdata(); 
?></a>
                    </div>
                </div>
                <?php
  endwhile; 
  wp_reset_postdata(); 
?>
            </div>
        </div>
    </div>
<div class="accueil__don">
    <div class="don don--fond">
        <div class="don don--container">
            <div class="don don--un">
                <img class="don--media" src='<?php echo get_template_directory_uri(); ?>/assets/solidarity.png'>
                <div class='don--valeur'><?php the_field('sympathisant_nombre'); ?></div>
                <div class='don--titre'><?php the_field('sympathisant_titre'); ?></div>
            </div>
            <div class="don don--deux">
                <img class="don--media" src='<?php echo get_template_directory_uri(); ?>/assets/donate.png'>
                <div class='don--valeur'><?php the_field('donateur_nombre'); ?></div>
                <div class='don--titre'><?php the_field('donateur_titre'); ?></div>
            </div>
            <div class="don don--trois">
                <img class="don--media" src='<?php echo get_template_directory_uri(); ?>/assets/calendar.png'>
                <div class='don--valeur'><?php the_field('fondation_nombre'); ?></div>
                <div class='don--titre'><?php the_field('fondation_titre'); ?></div>
            </div>
            <div class="don don--quatre">
                <img class="don--media" src='<?php echo get_template_directory_uri(); ?>/assets/office-building.png'>
                <div class='don--valeur'><?php the_field('bureau_nombre'); ?></div>
                <div class='don--titre'><?php the_field('bureau_titre'); ?></div>
            </div>
        </div>
        <div class="don don--mission">
            <?php the_field('don_mission'); ?>
        </div>
        <div class='don don--animation'>
            <a href="https://www.jedonneenligne.org/equiterre/FAIREUNDON/" class="don--link" target="_blank"
                rel="noopener noreferrer">
                <button class='don don--btn'>
                    <div class=" don don--btnTxt"> <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt=""
                            style="width:20px;height:20px;"> <?php the_field('don_bouton'); ?>
                        </div>
                </button>
            </a>
            <div class='don don--coeurs'>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="dons" class="don--coeur02"
                    style="width:20px;height:20px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="dons" class="don--coeur03"
                    style="width:20px;height:20px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="dons" class="don--coeur04"
                    style="width:20px;height:20px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="dons" class="don--coeur05"
                    style="width:20px;height:20px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="dons" class="don--coeur06"
                    style="width:20px;height:20px;">
            </div>
        </div>
    </div>
</div>
<div class="accueil__temoignage">
    <div class="accueil__temoignage__contraste"></div>
    <div class="accueil__temoignage__titre"><?php the_field('titre_section_temoignage'); ?></div>
    <div class='swiper-temoignage'>
        <div class="accueil__temoignage__cartes swiper-wrapper">
            <?php
  $temoignage = new WP_Query('post_type=temoignage');
  while ($temoignage->have_posts()) : $temoignage->the_post();
?>
            <div class="temoignage temoignage--<?php the_field('indextemoin'); ?> swiper-slide">
                <div class='temoignage--media'><img src="<?php echo get_the_post_thumbnail_url();?>" alt="temoin_03">
                </div>
                <div class='temoignage--nom'><?php the_title(); ?></div>
                <div class='temoignage--ville'><?php the_field('ville'); ?></div>
                <div class='temoignage--desc'><?php the_content(); ?></div>
            </div>
            <?php
  endwhile; 
  wp_reset_postdata(); 
?>
        </div>
    </div>
</div>
</div>
<!--fin du div de l'acceuil-->
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>