<?php

add_action('after_switch_theme', 'create_new_role');

function create_new_role() {
    add_role(
        'suppporter',
        'Supporter',
        array(
            'read'         => true,
            'publish_soutien' => true,
            'edit_soutien' => true,
            'read_soutien' => true,
            'delete_soutien'    => true,
            'edit_others_soutiens' => false,
            'create_soutiens' => true,
            'read_soutien'    => true,
            )
        );
}

function add_admin_capabilities() {
    $admins = get_role( 'administrator' );

    $admins->add_cap( 'edit_soutien' ); 
    $admins->add_cap( 'edit_soutiens' ); 
    $admins->add_cap( 'edit_other_soutiens' ); 
    $admins->add_cap( 'publish_soutiens' ); 
    $admins->add_cap( 'read_soutien' ); 
    $admins->add_cap( 'read_private_soutiens' ); 
    $admins->add_cap( 'delete_soutien' ); 
}

add_action( 'admin_init', 'add_admin_capabilities');