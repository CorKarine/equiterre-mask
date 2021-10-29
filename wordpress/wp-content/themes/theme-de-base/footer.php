<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer class="footer">
      <div class="footer__partenaire">
        <img src="sources/medias/partenaire_cafeteria.png" alt="partenaire_cafeteria">
        <img src="sources/medias/partenaire_logo_laval.gif" alt="partenaire_laval">
        <img src="sources/medias/partenaire_saveur.png" alt="partenaire_saveur">
      </div>
      <div class="footer__information">
        <div class='footer__information__media'>
          <a href="index.html"><img src="sources/medias/logo.png" alt="logo" width="142" height="38"></a>
          <p>© 2021 Équiterre, MASK</p>
          <div class="footer__information__resaux"></div>
          <a href="https://www.facebook.com/equiterre/" target="_blank" rel="noopener noreferrer"><img
              src="assets/facebook.png" alt="facebook" class='footer__information__media--sociaux'></a>
          <a href="https://www.youtube.com/user/equiterreONG" target="_blank" rel="noopener noreferrer"><img
              src="assets/youtube.png" alt="youtube" class='footer__information__media--sociaux'></a>
          <a href="https://www.linkedin.com/company/equiterre" target="_blank" rel="noopener noreferrer"><img
              src="assets/linkedin.png" alt="linkedin" class='footer__information__media--sociaux'></a>
          <a href="https://www.instagram.com/equiterre_ong/" target="_blank" rel="noopener noreferrer"><img
              src="assets/twitter.png" alt="twitter" class='footer__information__media--sociaux'></a>
        </div>
        <div class='footer__information__contact'>
          <h4>Donation</h4>
          <a href="https://www.jedonneenligne.org/equiterre/FAIREUNDON/" target="_blank" rel="noopener noreferrer">
            <button class='footer__information__contact__btn'>
              <img src="assets/heart.png" alt="dons" class="heart"> FAITES UN DON !
            </button>
          </a>
          <h4>adresse</h4>
          <a href="https://goo.gl/maps/srKKR8urMHB1yJT77" target="_blank" rel="noopener noreferrer">
            <p>870, avenue de Salaberry, bureau 226 <br>
              Québec (Québec) G1R 2T9</p>
          </a>
          <h4>téléphone</h4>
          <p>418 522-0006</p>
          <h4>courriel</h4>
          <p>info@equiterre.org</p>
        </div>
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
