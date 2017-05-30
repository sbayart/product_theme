<?php
/*
Plugin Name: emails
Description: In order to looking for emails.
Author: Salwa/Solene/Sylvie
Version: 1.0
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'admin_menu', 'emails_menu');

function emails_menu() {
    add_menu_page( 'CV Emails', 'recuperation donnes', 'manage_options', 'emails-menu', 'add_emails' );
}

function add_emails() {
    global $wpdb;
    $mymails = $wpdb->get_results( "SELECT email FROM form" );
    foreach ( $mymails as $mymail ) {
    	echo '<p>'.$mymail->email.'</p>';
    };
    $myfirst_names = $wpdb->get_results( "SELECT first_name FROM form" );
    foreach ( $myfirst_names as $myfirst_name ) {
    	echo '<p>'.$myfirst_name->first_name.'</p>';
    };
    $mylast_names = $wpdb->get_results( "SELECT last_name FROM form" );
    foreach ( $mylast_names as $mylast_name ) {
    	echo '<p>'.$mylast_name->last_name.'</p>';
    };
    echo '<a href="'.get_site_url().'/wp-content/plugins/emails/save_mails.php">Exporter les emails</a>';
}
 ?>
