<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

.groups-profile {
	border: 1px #00A7CB solid;
	padding: 10px;

	-moz-box-shadow: 2px 4px 9px #c8c6d2; /* Firefox/Mozilla */  
	-webkit-box-shadow: 2px 4px 9px #c8c6d2; /*Safari/Chrome */  
	box-shadow: 2px 4px 9px #c8c6d2; /* Opera & hoe het zou moeten */
}


/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 90px;
	padding: 5px 0 20px;
	position: relative;
}
.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box {
	background: url(<?php echo elgg_get_site_url(); ?>mod/theme_heerhugowaard/graphics/account.jpg) repeat scroll 0 0 #FFFFFF;
    color: #FFFFFF;
    height: 70px;
    line-height: 13px;
    padding: 5px 10px 0 0;
    position: absolute;
    right: 0;
    top: 5px;
    text-align: right;
    width: 215px;
    font-size: 11px;
}

.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box > .messages {
	background: url(<?php echo elgg_get_site_url(); ?>mod/theme_heerhugowaard/graphics/mail.png) no-repeat scroll 0 1px transparent;
	padding-left: 20px;
}
.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box a {
	font-weight: bold;
}
.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box > div {
	margin-left: 5px;
}

.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box input[type="text"],
.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box input[type="password"]{
	width: 92px;
	margin-left: 2px;
}

.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box input[type="password"] {
	display: none;
}

.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box input[type="submit"] {
	margin: 0px;
	width: auto;
}

.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box a {
	color: #FFFFFF;
}

.elgg-page-default .elgg-page-header > .elgg-inner .loggedin-box a:hover {
	text-decoration: underline;	
}

.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
	/*background: #4690D6 url(<?php echo elgg_get_site_url(); ?>_graphics/header_shadow.png) repeat-x bottom left;*/
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	/*background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/sidebar_background.gif) repeat-y right top;*/
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/two_sidebar_background.gif) repeat-y right top;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 210px;
	margin: 20px 0 0 10px;
	border: 1px solid #00A7CB;

	-moz-box-shadow: 2px 4px 9px #c8c6d2; /* Firefox/Mozilla */  
	-webkit-box-shadow: 2px 4px 9px #c8c6d2; /*Safari/Chrome */  
	box-shadow: 2px 4px 9px #c8c6d2; /* Opera & hoe het zou moeten */
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}