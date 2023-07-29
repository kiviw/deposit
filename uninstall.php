<?php
// If uninstall is not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Remove custom database table on plugin uninstall
global $wpdb;
$table_name = $wpdb->prefix . 'deposit_requests';
$wpdb->query("DROP TABLE IF EXISTS $table_name");
