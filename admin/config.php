<?php
include_once('../settings.php');
// HTTP
define('HTTP_SERVER', 'http://'.$domain.'/admin/');
define('HTTP_CATALOG', 'http://'.$domain.'/');

// HTTPS
define('HTTPS_SERVER', 'http://'.$domain.'/admin/');
define('HTTPS_CATALOG', 'http://'.$domain.'/');

// DIR
define('DIR_APPLICATION', $rootdir.'/admin/');
define('DIR_SYSTEM', $rootdir.'/system/');
define('DIR_IMAGE', $rootdir.'/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', $rootdir.'/'.'/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', $db_host);
define('DB_USERNAME', $db_login);
define('DB_PASSWORD', $db_password);
define('DB_DATABASE', $db_name);
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

