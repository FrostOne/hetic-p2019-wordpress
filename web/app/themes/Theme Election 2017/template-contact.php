<?php
/*
Template Name: Contact
*/

get_header(); // call header.php  

?>


<div class="catch" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/image-30-1.png);">
    <div class="bottom">
      <div class="row">    
        <div class="col-8">
          <h1 class="contact__title">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</h1>
      </div>     
  </div>
  <div class="row">
      <button>Soutenez le <strong>VOTE BLANC</strong></button>
  </div>
</div>
</div>

<div class="row">
  <div class="col-6 ma">
    <form class="contact">
      <input type="text" class="text" placeholder="Votre nom">
      <input type="text" class="text" placeholder="Votre nom">
      <input type="mail" class="text" placeholder="Votre mail">
      <textarea placeholder="Votre message"></textarea>
      <button type="submit" >ENVOYER VOTRE <strong>MESSAGE</strong></button>
  </form>
</div>
</div>


<?php get_footer(); // call footer.php  ?>