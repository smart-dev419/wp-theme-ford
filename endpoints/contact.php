<?php
/**
* AJAX Endpoint for contact form.
* Post to admin-ajax.php with the action param as "contact_form"
* This can be used as a sample to create other AJAX endpoints in the theme.
* Add as many of these files in the /endpoints/ directory and they will automatically be loaded into your WP site.
*/

$action_param = 'contact';

add_action( 'wp_ajax_' . $action_param, 'custom_contact_form' );
add_action( 'wp_ajax_nopriv_' . $action_param, 'custom_contact_form' );

function custom_contact_form()
{   

    $nonce = 'contact-nonce';

    header( "Content-Type: application/json" );
    if ( ! wp_verify_nonce( $_REQUEST[ $nonce ] , $nonce ) )
    {
        die ( json_encode( array('status' => 'Busted!') ) );
    }

    $entry = array();
    $entry['form_id'] = $_REQUEST['form_id'];
    $entry['1'] = $_REQUEST['first-name'];
    $entry['2'] = $_REQUEST['last-name'];
    $entry['3'] = $_REQUEST['address-1'];
    $entry['4'] = $_REQUEST['address-2'];
    $entry['5'] = $_REQUEST['phone'];
    $entry['6'] = $_REQUEST['city'];
    $entry['7'] = $_REQUEST['mail'];
    $entry['8'] = $_REQUEST['place'];
    $entry['9'] = $_REQUEST['code'];
    $entry['10'] = $_REQUEST['comments'];
    $entry['11'] = $_REQUEST['country'];
    $entry['12'] = $_REQUEST['how-hear'];

    $response = GFAPI::add_entry( $entry );

    if( ! is_wp_error( $response ) )
    {
        GFAPI::send_notifications( GFAPI::get_form( $entry['form_id'] ), GFAPI::get_entry( $response ), 'form_submission' );
            

        die( json_encode(array('status' => 'success')) );
    }


    $error = array(
        'status' => 'error',
        'message' => $response->get_error_message()
    );
    
    die( json_encode($error) );

}