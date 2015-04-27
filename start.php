<?php 

	function theme_heerhugowaard_init(){
		define(THEME_COLOR1, "6EAB23"); // groen
		define(THEME_COLOR2, "003479"); // donker blauw
		define(THEME_COLOR3, "00A7CB"); // licht blauw
		define(THEME_COLOR4, "FFFFFF"); // wit
		define(THEME_COLOR5, "B6D591"); // pink
		
		$context = elgg_get_context();
		
		elgg_extend_view("css/elgg", "theme_heerhugowaard/css");
	
		if($context == 'activity') {
			elgg_extend_view('page/layouts/content/header', 'theme_heerhugowaard/extend/addwire', 500);
		}
				
		if(elgg_is_logged_in()){
			elgg_extend_view("core/account/login_dropdown","theme_heerhugowaard/header_buttons");
			elgg_extend_view("page/elements/header","search/search_box");
		}
		
		elgg_register_plugin_hook_handler('index', 'system', 'theme_heerhugowaard_index');
		
		// reset of dashboard 2012-08-31
		elgg_extend_view("page/layouts/widgets", "theme_heerhugowaard/extend/dashboard_reset", 400);
	}
	
	elgg_register_event_handler('init', 'system', 'theme_heerhugowaard_init');