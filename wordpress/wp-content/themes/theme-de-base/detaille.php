<?php <div class="detailnouvelle">
    <div class="nouvelleBackground">
      <div class="blocImageCategorie">
      <h5 class="categorieNouvelle"> Catégorie: the_category( ' ' )</h5>
      <img src="<?php echo get_the_post_thumbnail_url();?>" alt="arc" class="nouvelleImage">
      </div>
      <div class="blocTitreNouvelle">
        <h1 class="nouvelleTitre">the_title</h1>
        <h3 class="blocPublie"><?php echo get_the_date()</h3>
      </div>
      <div class="nouvelleContraste"> 
      </div>

    </div>
    <div class="blocNouvelle">
      <p class="textNouvelle">the_content()</p>


      </div>
      ?>