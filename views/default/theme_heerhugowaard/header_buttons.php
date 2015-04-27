<?php 
echo "<div class='theme-heerhugowaard-header-buttons'>";
for($i = 1; $i < 5; $i++){
	$text_value = elgg_get_plugin_setting("button" . $i . "_text", "theme_heerhugowaard");
	$link_value = elgg_get_plugin_setting("button" . $i . "_link", "theme_heerhugowaard");
	
	if(!empty($text_value) && !empty($link_value)){
		echo "<span><div class='theme-heerhugowaard-header-button-left'></div><div class='theme-heerhugowaard-header-button-center'>" . elgg_view("output/url", array("text" =>  $text_value , "href" => $link_value)) . "</div><div class='theme-heerhugowaard-header-button-right'></div></span>";
	}
	
}

echo "</div>";