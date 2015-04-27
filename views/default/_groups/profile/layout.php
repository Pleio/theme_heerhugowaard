<?php
/**
 * Layout of the groups profile page
 *
 * @uses $vars['entity']
 */

?><div class="groups-profile-head"><?php echo elgg_echo("theme_heerhugowaard:group_profile:header");?> | <?php echo $vars['entity']->name; ?></div><?php 
echo elgg_view('groups/profile/summary', $vars);
if (group_gatekeeper(false)) {
	echo elgg_view('groups/profile/widgets', $vars);
} else {
	echo elgg_view('groups/profile/closed_membership');
}
