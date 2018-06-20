<?php
//入口文件
define('APP_HOST',$_SERVER['HTTP_HOST']);


$module=isset($_GET['module']) ? ucfirst($_GET['module']) : 'Admin';

$controller =isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Login';

$action=isset($_GET['action']) ? $_GET['action'] : 'login';


// $module=isset($_GET['module']) ? ucfirst($_GET['module']) : 'Home';

// $controller =isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Duan';

// $action=isset($_GET['action']) ? $_GET['action'] : 'index';


$config=include('./Config/config.php');
// print_r($config);

include('./Common/function.php');


use Controller\Controller;


$controller ='Controller\Admin\\'.$controller;

// $controller ='Controller\Home\\'.$controller;

// include('./Controller/controller.php');
// include('./Controller/'.$controller.'.php');
// include('./Model/Db.php');
// $db=new DB();
// $res=$db->show('liuyan');
// var_dump($res);
$load= new $controller();

$load->$action();


