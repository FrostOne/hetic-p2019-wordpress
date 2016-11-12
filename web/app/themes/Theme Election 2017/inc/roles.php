<?php

add_action('after_switch_theme', 'create_new_role');

function create_new_role(){
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
  
  $role = get_role( 'administrator');
  $role->add_cap('edit_soutien');
  $role->add_cap('edit_soutiens');
  $role->add_cap('create_soutiens');
  $role->add_cap('publish_soutiens');
  $role->add_cap('publish_other_soutiens');
  $role->add_cap('read_soutien');
}