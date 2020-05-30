<?php
/*
 Plugin Name: Auto post facebook hdd
Description:   Tự động đăng bài viết lên facebook
Version: 1.0
Author: huynh duc dev
Author URI: https://facebook/hd7447
License: GPLv2 or later
*/

if( !defined('ABSPATH') ){ exit();}
if ( !function_exists( 'add_action' ) ) {
	echo "Hi!  Mot plugin chi nen lam dung nhiem vu cua no ma thoi";
	exit;
}
if( isset($_POST) && isset($_POST['fb_auth'] ) ||  (isset($_GET['page']) && ($_GET['page']=='facebook-auto-publish-settings')) || (isset($_GET['page']) && ($_GET['page']=='facebook-auto-publish-log')))
{
    ob_start();
}
// require_once( dirname( __FILE__ ) . '/admin/active.php' );
// require_once( dirname( __FILE__ ) . '/hhd-function.php' );
require_once( dirname( __FILE__ ) . '/admin/menu.php' );
// require_once( dirname( __FILE__ ) . '/admin/uninstall.php' );
// require_once( dirname( __FILE__ ) . '/vendor/autoload.php');
// require_once( dirname( __FILE__ ) . '/admin/publish.php' );
// require_once( dirname( __FILE__ ) . '/admin/metabox.php' );

?>