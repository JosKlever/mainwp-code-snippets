<?php
/**
* Name: Remove autoloaded transient for dirsize
* Type: Return info from Child Sites
**/
global $wpdb;
$pf = $wpdb->prefix;
$q = "SELECT option_id FROM ".$pf."options WHERE option_name = '_transient_dirsize_cache' AND autoload IN ( 'yes', 'on', 'auto-on', 'auto');";
$record_found = $wpdb->get_var($q);

if ($record_found) {
	delete_option('_transient_dirsize_cache');
	echo "Option deleted.";
} else {
	echo "No issue found.";
}
