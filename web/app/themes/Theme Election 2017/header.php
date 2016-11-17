<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="screen" title="no title">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
  <title>Election Présidentielle 2017 - Le Candidat Blanc</title>
  <?php wp_head(); ?>
</head>

<body class="homepage">
   <nav class="row">
      <a href="<?php echo home_url(); ?>" title="Logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
      <div class="col-1"></div>
      <div class="col-7 ma">
        <ul>
          <li><a href="<?php echo home_url(); ?>" title="Accueil">ACCUEIL</a></li>
          <li><a href="?page_id=56" title="Pourquoi voter blanc">POURQUOI VOTER BLANC</a></li>
          <li><a href="?page_id=52" title="Le Programme">LE PROGRAMME</a></li>
          <li><a href="?page_id=54" title="Comité de soutien">COMITÉ DE SOUTIEN</a></li>
          <li><a href="?page_id=60" title="Blog">BLOG</a></li>
          <li><a href="?page_id=50" title="Contact">CONTACT</a></li>
      </ul>

  </div>
  <div class="col-3 timer ma">
    COMPTE À REBOURS ÉLÉCTORAL
    <div id="coutdown"></div>
</div>
</nav>