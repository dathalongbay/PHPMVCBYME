<?php
$admin_path = dirname(__FILE__);
$site_path = dirname($admin_path);
define('ADMIN_APP_PATH', $admin_path.'/app');
define('ADMIN_CONTROLLER_PATH', $admin_path.'/app/controllers');
define('ADMIN_MODEL_PATH', $admin_path.'/app/models');
define('ADMIN_VIEW_PATH', $admin_path.'/app/views');
define('CORE_PATH', $site_path.'/core');
define('DB_PATH', $site_path.'/core/database');
define('HELPER_PATH', $admin_path.'/core/helper');
define('ADMIN_URL', 'http://localhost/PHPMVCBYME/phpmvc/admin/');
define('ADMIN_URL_ASSETS', 'http://localhost/PHPMVCBYME/phpmvc/admin/assets/');


spl_autoload_register(function ($class_name) {
    $paths = array(ADMIN_APP_PATH, ADMIN_CONTROLLER_PATH, ADMIN_MODEL_PATH, ADMIN_VIEW_PATH, CORE_PATH, DB_PATH, HELPER_PATH);
    foreach ($paths as $class_file_path) {
        $full_path = $class_file_path.'/'.$class_name.'.php';
        if (file_exists($full_path)) {
            require $full_path;
        }
    }
});

function view($view, $action, $data) {
    ob_start();

    extract($data);
    require ADMIN_VIEW_PATH.'/'.$view.'/'.$action.'.php';

    $out = ob_get_contents();

    ob_end_clean();

    echo $out;
}

$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
$controller = strtolower($controller);
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
$action = strtolower($action);
$actionName = $action.'Action';
$controllerClass = $controller.'Controller';

if (class_exists($controllerClass)) {
    $instanceController = new $controllerClass();
    if (method_exists($instanceController, $actionName)) {
        $instanceController->$actionName();
    } else {
        $instanceController->indexAction();
    }
} else {
    $controllerClass = 'errorController';
    $instanceController = new $controllerClass();
    $instanceController->indexAction();
}
