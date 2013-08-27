<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'local_db_name' );
define( 'DB_USER', 'local_db_user' );
define( 'DB_PASSWORD', 'local_db_password' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'


// define('WP_SITEURL', 'http://10.99.9.20/subdir/wp');
// define('WP_HOME', 'http://10.99.9.20/subdir');
// define('RELOCATE', true);

// ================================================
// Custom Content Directory
// If you have a different url scheme for locat dev
// ================================================
// define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/subdir/content' );


// =================================================================
// Debug mode
// Always enable these in local-config.php
// =================================================================
@ini_set('log_errors','Off');
@ini_set('display_errors','On');
@ini_set('error_reporting', E_ALL );
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
