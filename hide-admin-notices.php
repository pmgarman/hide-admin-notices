<?php
/*
 * Plugin Name: Hide all notices in /wp-admin/
 * Plugin URI: https://pmgarman.me
 * Description: OMG STOP THE NOTICE FLOOD. Uses CSS to hide standard WordPress admin notices.
 * Author: Patrick Garman
 * Author URI: https://pmgarman.me
 * Version: 1.0.0
 * License: GPLv2
 */

function pmgarman_hide_admin_notices() { ?>
    <style type="text/css">
        div.notice,
        div.updated,
        div.error,
        div.update-nag {
            display: none;
        }
    </style>
<?php }
add_action( 'admin_head', 'pmgarman_hide_admin_notices' );