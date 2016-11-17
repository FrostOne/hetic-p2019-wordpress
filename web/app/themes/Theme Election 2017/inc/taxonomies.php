<?php
add_action('init', 'create_custom_taxonomy');
function create_custom_taxonomy(){
  $args = array(
          'label' => 'Catégorie soutien',
          'rewrite' => array( 'slug' => 'categorie-soutien' ),
          'hierarchical' => true,
      );
  register_taxonomy( 
    'categorie-soutien',
    array('soutien'),
     $args ); 
  
  $args2 = array(
          'label' => 'Mots-clés soutien',
          'rewrite' => array( 'slug' => 'mots-cles-soutien' ),
          'hierarchical' => false,
      );
  register_taxonomy( 
    'mots-cles-soutien',
    array('soutien'),
     $args2 ); 
}