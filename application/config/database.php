<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group 			= 'default';
$query_builder 			= TRUE;

// Cek apakah sedang di localhost atau di server
if ($_SERVER['HTTP_HOST'] === 'localhost:8080' || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false) {
	// Konfigurasi untuk LOCALHOST
	$db['default'] 		= array(
		'dsn'       	=> '',
		'hostname'  	=> 'localhost',
		'username'  	=> 'root',
		'password'  	=> '',
		'database'  	=> 'wh',
		'dbdriver'  	=> 'mysqli',
		'dbprefix'  	=> '',
		'pconnect'  	=> FALSE,
		'db_debug'  	=> (ENVIRONMENT !== 'production'),
		'cache_on'  	=> FALSE,
		'cachedir'  	=> '',
		'char_set'  	=> 'utf8mb4',
		'dbcollat'  	=> 'utf8mb4_unicode_ci',
		'swap_pre'  	=> '',
		'encrypt'   	=> FALSE,
		'compress'  	=> FALSE,
		'stricton'  	=> FALSE,
		'failover'  	=> array(),
		'save_queries' 	=> TRUE
	);
} else {
	// Konfigurasi untuk SERVER (LIVE)
	$db['default'] 		= array(
		'dsn'       	=> '',
		'hostname'  	=> 'localhost',
		'username'  	=> 'edodclou_anecos',
		'password'  	=> 'a6,j?CPU@mwQ',
		'database'  	=> 'edodclou_anecos',
		'dbdriver'  	=> 'mysqli',
		'dbprefix'  	=> '',
		'pconnect'  	=> FALSE,
		'db_debug'  	=> (ENVIRONMENT !== 'production'),
		'cache_on'  	=> FALSE,
		'cachedir'  	=> '',
		'char_set'  	=> 'utf8mb4',
		'dbcollat'  	=> 'utf8mb4_unicode_ci',
		'swap_pre'  	=> '',
		'encrypt'   	=> FALSE,
		'compress'  	=> FALSE,
		'stricton'  	=> FALSE,
		'failover'  	=> array(),
		'save_queries' 	=> TRUE
	);
}
