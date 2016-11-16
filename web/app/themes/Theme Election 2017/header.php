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
    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
    <div class="col-1"></div>
    <div class="col-7 ma">
      <ul>
        <li>ACCUEIL</li>
        <li>POURQUOI VOTER BLANC</li>
        <li>LE PROGRAMME</li>
        <li>COMITÉ DE SOUTIEN</li>
        <li>BLOG</li>
        <li>CONTACT</li>
      </ul>

    </div>
    <div class="col-3 timer ma">
      COMPTE À REBOURD ÉLÉCTORALE
      <div id="coutdown"></div>
    </div>
  </nav>