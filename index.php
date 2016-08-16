<?php
/**
 * Created by PhpStorm.
 * User: kassiano
 * Date: 26/06/2016
 * Time: 15:58
 */

    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    require_once('Config.php');
    require_once('connection.php');


    $controller = $_GET['controller'];
    $action     = $_GET['action'];


    if (empty($controller)) {
        $controller = "clima";
    }

    if (empty($controller)) {
        $action = "getPrevisoes";
    }

    require_once('routes.php');

?>
