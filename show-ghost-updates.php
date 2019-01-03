// This snippet is based on the code from https://stackoverflow.com/questions/22137814/wordpress-shows-i-have-1-plugin-update-when-all-plugins-are-already-updated

$output = "";

// Check plugins
$plugin_updates = get_site_transient( 'update_plugins' );
if ( $plugin_updates && ! empty( $plugin_updates->response ) ) {
  foreach ( $plugin_updates->response as $plugin => $details ) {
    $title = $details->title;
    $output .= "<p><strong>Plugin</strong> <u>$title</u> ($plugin) is reporting an available update.</p>";
  }
}

// Check themes
wp_update_themes();
$theme_updates = get_site_transient( 'update_themes' );
if ( $theme_updates && ! empty( $theme_updates->response ) ) {
  foreach ( $theme_updates->response as $theme => $details ) {
    $title = $details->title;
    $output .= "<p><strong>Theme</strong> <u>$title</u> ($theme) is reporting an available update.</p>";
  }
}

if ( empty( $output ) ) $output = "No pending updates found in the database.";

echo "<h2>Pending updates</h2>" . $output;
