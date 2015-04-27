<?php 

	/**
	 * Reset the dashboard of the user to the new layout
	 * 
	 * @since: 2012-08-31 
	 */

	// check if on dashboard and have a user
	if(elgg_in_context("dashboard") && ($user = elgg_get_logged_in_user_entity())){
		// check if not already reset
		if(!isset($user->dashboard_reset_20120831)){
			// get dashboard widgets
			$options = array(
				"type" => "object",
				"subtype" => "widget",
				"limit" => false,
				"owner_guid" => $user->getGUID(),
				"private_setting_name_value_pairs" => array(
					"name" => "context",
					"value" => "dashboard"
				)
			);
			
			if($widgets = elgg_get_entities_from_private_settings($options)){
				// remove all widgets
				foreach($widgets as $widget){
					$widget->delete();
				}
			}
			
			// set new widgets
			// first the default Elgg call
			elgg_create_default_widgets("create", "user", $user);
			
			// next add Widget Manager functionality
			if(is_callable("widget_manager_update_fixed_widgets")){
				widget_manager_update_fixed_widgets("dashboard", $user->getGUID());
			}
			
			// make sure we don't do this again
			$user->dashboard_reset_20120831 = time();
		}
	}