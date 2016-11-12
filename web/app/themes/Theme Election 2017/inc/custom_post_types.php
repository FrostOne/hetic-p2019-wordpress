<?php

add_action('init', 'create_custom_post_type_soutien');

function create_custom_post_type_soutien(){

  $labels = array(
    'name'               => 'Soutiens',
    'singular_name'      => 'Soutien',
    'all_items'          => 'Tous les soutiens',
    'add_new'            => 'Ajouter un soutien',
    'add_new_item'       => 'Ajouter un nouveau soutien',
    'edit_item'          => "Modifier le soutien",
    'new_item'           => 'Nouveau soutien',
    'view_item'          => "Voir le soutien",
    'search_items'       => 'Rechercher un soutien',
    'not_found'          => 'Pas de résultat',
    'not_found_in_trash' => 'Pas de résultat',
    'parent_item_colon'  => 'soutien parent:',
    'menu_name'          => 'Soutiens',
    );

  $args = array(
    'labels'              => $labels,
    'hierarchical'        => false,
    'supports'            => array( 'title','thumbnail'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 0,
    'menu_icon'           => 'dashicons-format-aside',
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => true,
    'exclude_from_search' => false,
    'has_archive'         => false,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite'             => array( 'slug' => 'slide' ),
    'capabilities' => array(
        'edit_post' => 'edit_soutien',
        'edit_posts' => 'edit_soutiens',
        'edit_others_posts' => 'edit_other_soutiens',
        'publish_posts' => 'publish_soutiens',
        'read_post' => 'read_soutien',
        'read_private_posts' => 'read_private_soutiens',
        'delete_post' => 'delete_soutien'
        ),
    'map_meta_cap' => true
    );
  register_post_type( 'soutien', $args );
}

