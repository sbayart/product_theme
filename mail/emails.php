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
    $mydata = $wpdb->get_results( "SELECT * FROM form" );
    echo '<table width="50%" border="1px" align="center" bgcolor="white" >';
    echo '<tr><td>Email</td><td>First Name</td><td>Last Name</td><td>Option</td><tr>';
    foreach ( $mydata as $row ) {
        echo '<tr>';
    	echo '<td>'.$row->email.'</td><td>'.$row->first_name.'</td><td>'.$row->last_name .'</td><td>'.$row->option.'</td>';
        echo '</tr>';
    };
    echo '</table>';
    echo '<a href="'.get_site_url().'/wp-content/plugins/emails/save_mails.php">Exporter les emails</a>';

}
 ?>
