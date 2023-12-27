<?php
define('MAR_BASEDIR',dirname(__FILE__));
include_once(MAR_BASEDIR . '/models/Gymdesk.php');
define('MAR_RELATIVE_PATH','plugins/'.plugin_basename(dirname(__FILE__)).'/');
// Adjust protocol
$url = get_option('siteurl').'/wp-content/' . MAR_RELATIVE_PATH;
$url = isset($_SERVER['HTTPS']) ? str_replace('http://','https://',$url) : str_replace('https://','http://',$url);
define('MAR_URL',$url);
