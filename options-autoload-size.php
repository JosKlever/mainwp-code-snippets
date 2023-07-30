<?php
/**
* Name: Check Autoloaded Data Size
* Type: Return info from Child Sites
**/
global $wpdb;
$pf = $wpdb->prefix;
$q = "SELECT SUM(LENGTH(option_value)) as autoload_size FROM ".$pf."options WHERE autoload='yes';";
$size = $wpdb->get_var($q);
echo "Size: " . $size;

if ($size > 100000 ) {
	$qt = "SELECT option_name, LENGTH(option_value) AS option_value_length FROM ".$pf."options WHERE autoload='yes' ORDER BY option_value_length DESC LIMIT 10;";
	$top_results = $wpdb->get_results($qt);
	echo "<br>Largest keys:<br><table>";
	foreach($top_results as $val=>$v) {
		echo "<tr><td>". $v->option_name . "</td><td>" . $v->option_value_length . "</td></tr>";
	}
	echo "</table>";
}
