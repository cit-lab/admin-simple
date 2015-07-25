<?php
/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午10:41
 */
require_once(__DIR__ . '/../vendor/autoload.php');

try {
    $r = new Cit\Input\Route();
    $app = new Cit\Application($r);
    $app->run();
    var_dump($app->router->isCli());
} catch (Exception $e) {
    // TODO:handle all exceptions
    die('oops');
}
