<?php 

/*
Plugin Name: Add Membership Level
Description: Automatically add a WPMU Membership level to a newly-created user.
Author: Roger Hutchings
Version: 1.0
Author URI: http://rogerhutchin.gs
*/

// Add action
add_action('user_register', 'roglor_add_membership_level');


function roglor_add_membership_level( $user_id ) {

    if ( class_exists( M_Membership ) ):
        $new_user = new M_Membership( $user_id );
        $target_level = '2'; // Change the target level to whatever you want
        $new_user->add_level( $target_level );
    endif;

}
