<?php

// load all the include php files
$inc_path = trailingslashit( dirname(__FILE__) ) . 'inc/';
foreach( glob( $inc_path . '*.php') as $file ) {
	require_once( $file );
}