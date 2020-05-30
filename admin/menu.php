<?php 
if( !defined('ABSPATH') ){ exit();}
function hdd_apfb_add_menu(){
    add_menu_page( 'Auto post facebook', 'Auto post facebook', 'manage_options', 'hhd-auto-post-facebook', 'hhd-auto-post-setting', '', 2 );
    add_submenu_page( 'hhd-auto-post-facebook' ,'Auto post facebook - setting', 'Setting', 'manage_options', 'hhd-auto-post-setting-page','hdd_apfb_setting');
    add_submenu_page( 'hhd-auto-post-facebook' ,'Auto post facebook - logs', 'Logs', 'manage_options', 'hhd-auto-post-log-page','hdd_apfb_log');

}
add_action('admin_menu', 'hdd_apfb_add_menu');
