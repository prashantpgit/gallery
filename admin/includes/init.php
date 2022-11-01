<?php 
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
//define('SITE_ROOT', 'E:' . DS . 'Program Files' . DS . 'EasyPHP 3.0'.  DS . 'www' . DS . 'gallery');
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'gallery');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');

ob_start();

require_once(INCLUDES_PATH.DS."functions.php");
require_once(INCLUDES_PATH.DS."config.php");
require_once(INCLUDES_PATH.DS."database.php");
require_once(INCLUDES_PATH.DS."db_object.php");
require_once(INCLUDES_PATH.DS."user.php");
require_once(INCLUDES_PATH.DS."photo.php");
require_once(INCLUDES_PATH.DS."comment.php");
require_once(INCLUDES_PATH.DS."session.php");
require_once(INCLUDES_PATH.DS."paginate.php");

?>