<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<?php 
		if(elgg_is_logged_in()) {
		?><img src="<?php echo $site_url; ?>mod/theme_heerhugowaard/graphics/hugo_verbindt.png" /><?php 
		} else {
		?><img src="<?php echo $site_url; ?>mod/theme_heerhugowaard/graphics/logo_heerhugowaard.png" /><?php 
		}
		?>
	</a>
</h1>