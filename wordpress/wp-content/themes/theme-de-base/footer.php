<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer class="footer">
      <div class="footer__partenaire">
      <?php
  $partenaire = new WP_Query('post_type=partenaire');
  while ($partenaire->have_posts()) : $partenaire->the_post();
?>
        <a href="<?php the_field('lien'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a>
        <?php
  endwhile; 
  wp_reset_postdata(); 
?>
      </div>
      <div class="footer__information">
        <div class='footer__information__media'>
  <a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" class="logo" alt="<?php echo $alt; ?>"
  width="142" height="38"></a>
          <p>© 2021 Équiterre, MASK</p>
          <div class="footer__information__resaux"></div>
          <a href="https://www.facebook.com/equiterre/" target="_blank" rel="noopener noreferrer"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook" class='footer__information__media--sociaux'></a>
          <a href="https://www.youtube.com/user/equiterreONG" target="_blank" rel="noopener noreferrer"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/youtube.png" alt="youtube" class='footer__information__media--sociaux'></a>
          <a href="https://www.linkedin.com/company/equiterre" target="_blank" rel="noopener noreferrer"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin" class='footer__information__media--sociaux'></a>
          <a href="https://www.instagram.com/equiterre_ong/" target="_blank" rel="noopener noreferrer"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter" class='footer__information__media--sociaux'></a>
        </div>
        <div class='footer__information__contact'>
        <?php
  $footer = new WP_Query( array( 'post_type' => 'footer', 'meta_value' => 'Footer' ) ); // 👈 Utilisation
  while ($footer->have_posts()) : $footer->the_post(); 
?>
          <h4><?php the_field('titre_don'); ?></h4>
          <a href="https://www.jedonneenligne.org/equiterre/FAIREUNDON/" target="_blank" rel="noopener noreferrer">
            <button class='footer__information__contact__btn'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/heart.png" alt="dons" class="heart"> <?php the_field('don_bouton'); ?>
            </button>
          </a>
          <h4><?php the_field('adresse_titre'); ?></h4>
          <a href="https://goo.gl/maps/5eo3uGPUkhAeLnLY9" target="_blank" rel="noopener noreferrer">
            <p>
            <?php the_field('adresse_info'); ?>
          </p>
          </a>
          <h4><?php the_field('telephone_titre'); ?></h4>
          <p><?php the_field('telephone_info'); ?></p>
          <h4><?php the_field('courriel_titre'); ?></h4>
          <p><?php the_field('courriel_info'); ?></p>
        </div>
        <?php
  endwhile; 
  wp_reset_postdata(); 
?>
        <div class="footer__information__separator"></div>
      </div>
    </footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</body>
</html>
