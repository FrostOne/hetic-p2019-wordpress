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
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => -1,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'soutien' ),
        'capabilities' => array(
                          'publish_posts' => 'publish_soutien',
                          'edit_posts' => 'edit_soutien',
                          'edit_others_posts' => 'edit_others_soutiens',
                          'delete_posts' => 'delete_soutien',
                          'delete_others_posts' => 'delete_others_soutien',
                          'read_private_posts' => 'read_private_soutien',
                          'edit_post' => 'edit_soutien',
                          'delete_post' => 'delete_soutien',
                          'read_post' => 'read_soutien'
                              ),

    );
    register_post_type( 'soutien', $args );
}