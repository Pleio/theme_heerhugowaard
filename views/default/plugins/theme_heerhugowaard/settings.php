<?php ?>
<div>
	<?php echo elgg_echo("theme_heerhugowaard:header_buttons:info"); ?>
</div>
<div>
	<?php 
	
		for($i = 1; $i < 5; $i++){
	
			$title = elgg_echo("theme_heerhugowaard:header_buttons:button" . $i);
			$text_var = "button" . $i . "_text";
			$link_var = "button" . $i . "_link";
			
			$body = elgg_echo("theme_heerhugowaard:header_buttons:text") . " " . elgg_view("input/text", array("name" => "params[$text_var]", "value" => $vars["entity"]->$text_var));
			$body .= elgg_echo("theme_heerhugowaard:header_buttons:link") . " " . elgg_view("input/url", array("name" => "params[$link_var]", "value" => $vars["entity"]->$link_var));
			
			echo elgg_view_module("inline", $title, $body);
		}
	?>
	
</div>