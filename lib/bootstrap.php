<?php
// FLAGS

//  the bootstrap is loaded.
define ('PHPAPP_BOOTSTRAP', true);

//  PATHS
//*******************************************************************************/

//  Root path
define ('PHPAPP_ROOT_PATH', realpath(getcwd() . DIRECTORY_SEPARATOR . '..'));
//  Lib path
define ('PHPAPP_LIB_PATH', PHPAPP_ROOT_PATH . DIRECTORY_SEPARATOR . 'lib');
//  Class path
define ('PHPAPP_CLASS_PATH', PHPAPP_LIB_PATH . DIRECTORY_SEPARATOR . 'classes');
//  Config path
define ('PHPAPP_CONF_PATH', PHPAPP_ROOT_PATH . DIRECTORY_SEPARATOR . 'conf');
//  Site Root
define ('PHPAPP_WWW_PATH', PHPAPP_ROOT_PATH . DIRECTORY_SEPARATOR . 'www');

//  INCLUDES
//*******************************************************************************/
require PHPAPP_LIB_PATH . DIRECTORY_SEPARATOR . 'functions.php';


?>
