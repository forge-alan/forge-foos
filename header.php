<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>My App</title>
	<!-- Path to Framework7 Library CSS-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/styles/framework7.min.css">
</head>
<body>
	<!-- Status bar overlay for fullscreen mode-->
	<div class="statusbar-overlay"></div>
	<!-- Panels overlay-->
	<div class="panel-overlay"></div>

	<!-- Left panel with reveal effect-->
	<div class="panel panel-left panel-reveal">
		<div class="content-block">
			<p>Left panel content goes here</p>
		</div>
	</div>

	<!-- Right panel with cover effect-->
	<div class="panel panel-right panel-cover">
		<div class="content-block">
			<p>Right panel content goes here</p>
		</div>
	</div>

	<!-- Views-->
	<div class="views">
		<!-- Your main view, should have "view-main" class-->
		<div class="view view-main">