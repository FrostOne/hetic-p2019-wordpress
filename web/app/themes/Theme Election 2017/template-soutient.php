<?php
/*
Template Name: Soutien
*/

get_header(); // call header.php  

?>

  <div class="row">
    <h1 class="ma desc__title">Comité de <strong>Soutien</strong></h1>
  </div>

  <div class="row mt2">
    <div class="col-05"></div>
    <div class="col-5">
      <p class="desc__content">Vous retrouverez dans cette section tous les gens qui nous soutiennent non seulement via des témoignages écrits, mais également par le biais de vidéos.</p>
    </div>
    <div class="col-05"></div>
    <div class="col-5">
      <p class="desc__content">Vous pouvez bien évidemment laissez le vôtre afin de nous montrer votre soutien, votre commentaire sera publié. Laisser un commentaire témoigne de votre soutien au mouvement.</p>
    </div>
  </div>

  <div class="row mt2 desc__subtitle"><h2>VIDEO ILS TEMOIGNENT</h2></div>

  <div class="row"><div class="bar4"></div><div class="separation"></div></div>

  <div class="row">
    <div class="col-3 video">
      <div><img class="video__img" src="<?php bloginfo('template_directory'); ?>/images/bg-video-1.png"></div>
      <h2 class="video__author">Temoignage de <strong> Maya Church</strong></h2>
      <h3 class="video__role">Economic Student at McGill</h3>
    </div>
    <div class="col-3 video">
      <div><img class="video__img" src="<?php bloginfo('template_directory'); ?>/images/bg-video-1.png"></div>
      <h2 class="video__author">Temoignage de <strong> Maya Church</strong></h2>
      <h3 class="video__role">Economic Student at McGill</h3>
    </div>
    <div class="col-3 video">
      <div><img class="video__img" src="<?php bloginfo('template_directory'); ?>/images/bg-video-1.png"></div>
      <h2 class="video__author">Temoignage de <strong> Maya Church</strong></h2>
      <h3 class="video__role">Economic Student at McGill</h3>
    </div>
    <div class="col-3 video">
      <div><img class="video__img" src="<?php bloginfo('template_directory'); ?>/images/bg-video-1.png"></div>
      <h2 class="video__author">Temoignage de <strong> Maya Church</strong></h2>
      <h3 class="video__role">Economic Student at McGill</h3>
    </div>
    
  </div>
  <div class="ban flex" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/ban-1.png');">
      <div class="row">
        <div class="ma ban__title col-8">  Vous avez le pouvoir de changer les choses : votez blanc</div>
        <div class="ban__button">
          <button class="ma"> SOUTENEZ <strong>LE VOTE BLANC</strong></button>
        </div>
      </div>
  </div>
  <div class="row"><h2 class="desc__subtitle">PAROLES D'INTERNAUTE</h2></div>
  
  <div class="row"><div class="bar4"></div><div class="separation"></div></div>

  <div class="row flex">
    <div class="col-5 vertical-align">
      <div class="post">
        <h3 class="post__author">Madelene Lacharité</h3>
        <p class="post__content">“J'ai voté blanc parce que le monde part en vrille.”</p>
      </div>
      <div class="post">
        <h3 class="post__author">Constance Bossé</h3>
        <p class="post__content">“C'est vrai que le vote blanc ne fait avancer notre société, mais bon ça ne va pas la faire reculer non plus. Si ?”</p>
      </div>
      <div class="post">
        <h3 class="post__author">Perrin Leduc</h3>
        <p class="post__content">“Je me suis trompé lors du vote. Je croyais voter pour Monsieur Blanc...”</p>
      </div>
      <div class="post">
        <h3 class="post__author">René Parent</h3>
        <p class="post__content">“Mon fils m'a dit de voter blanc, du coup j'ai voté blanc.”</p>
      </div>
  
    </div>
    <div class="col-1"></div>
    <div class="col-6">
      <h2 class="message__title">Vous Aussi témoignez</h2>
      <div class="mt2"></div>
      <form class="message">
        <label class="message__label">Nom</label><br><br>
        <input type="text" class="text"><br>
        <label class="message__label">Prenom</label><br><br>
        <input type="text" class="text"><br>
        <label class="message__label">Votre message</label><br><br>
        <textarea></textarea><br>
        <button type="submit">Poster Le <strong>Message</strong></button>
      </form>
    </div>

  </div>
  <div class="mt2"></div>


<?php get_footer(); // call footer.php  ?>