<?php 
// Define the OS specific directory separator
if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// Define project directory
if (!defined('ROOT')) define('ROOT', realpath(__DIR__ . '/..'));

// Turn error reporting off
//error_reporting(0);

// Turn on session
session_start();

// Turn on output buffering
ob_start();

// Load settings
require_once (implode(DS, array(ROOT, 'config', 'config.php')));

// Load escaper
require_once (implode(DS, array(ROOT, 'lib', 'sanitize.php')));

// Load classes
foreach (glob(implode(DS, array(ROOT, 'controller', 'class', '*.php'))) as $filename)
{
    require_once ($filename);
}
 
// Auto login if cookie was found
if(Cookie::exist(Config::get('cookie_name')) && !isset($_SESSION['ID'])) {
	$hash = Cookie::get(Config::get('cookie_name'));
	$hashCheck = DB::getInstance()->get('user_session', array('hash','=',$hash));

	if($hashCheck->count()) {
		$user = new User($hashCheck->first()->userID);
		
		$user->login();
	}
}
 
// Load basic classes
$user = new User();