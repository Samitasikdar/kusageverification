<?php
/**
 * Plugin Name:       	 Kus Age Verification
 * Description:       	 Age block content from younger people
 * Version:           	 1.0.0
 * Author:            	 Kus developer
 * Text Domain:       	 kus-age-verification
 * Domain Path:          /language
 */


define('KUS_AGE_VERIFICATION_PATH', plugin_dir_path(__FILE__));
define('KUS_AGE_VERIFICATION_URL', plugin_dir_url(__FILE__));
define('AGE_VERIFICATION_VERSION', '3.2.0');
define('AGE_VERIFICATION_SLUG', 'age-verification');


require_once KUS_AGE_VERIFICATION_PATH . '/load.php';
KusAgeVerification::init();
?>