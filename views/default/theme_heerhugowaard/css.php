<?php 
	
?>
#account_menu_login_form .elgg-input-text,
#account_menu_login_form .elgg-input-password {
	padding: 0;
	width: 100px;
	
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

.elgg-heading-site img {
	margin-bottom: -5px;
    margin-top: 5px;
}

.theme-heerhugowaard-header-buttons {
	position: absolute;
	right: 0px;
	top: 16px;
}

.theme-heerhugowaard-header-buttons > span {
	margin-left: 10px;
	vertical-align: top;
	display: inline-block;
}

.theme-heerhugowaard-header-button-center {
	background: url(<?php echo elgg_get_site_url();?>mod/theme_heerhugowaard/graphics/header_button/center.png) repeat-x;
	display: inline-block;
	height: 39px;
}

.theme-heerhugowaard-header-button-left {
	background: url(<?php echo elgg_get_site_url();?>mod/theme_heerhugowaard/graphics/header_button/left.png) no-repeat;
	width: 12px;
	height: 39px;
	display: inline-block;
}
.theme-heerhugowaard-header-button-right {
	width: 12px;
	height: 39px;
	display: inline-block;
	background: url(<?php echo elgg_get_site_url();?>mod/theme_heerhugowaard/graphics/header_button/right.png) no-repeat;
}

.theme-heerhugowaard-header-buttons a {
	color: white;
	font-weight: bold;
	font-size: 12px;
	line-height: 14px;
	vertical-align: middle;
	display: table-cell;
	padding: 0 8px;
	height: 39px;
	text-align: center;
}

.elgg-page-header .elgg-search {
	position: absolute;
    right: 5px;
    top: 92px;
    z-index: 1;
}

.elgg-page-header .search-advanced-type-selection {
	display: none;
}

.elgg-page-header .elgg-search input.search-input[type="text"] {
	border: 0px;
	width: 290px;
	background-position: 270px -916px;
	background-color: white;
	color: #<?php echo THEME_COLOR3; ?>;
}