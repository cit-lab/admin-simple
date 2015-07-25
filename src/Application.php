<?php

/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午10:14
 */
namespace Cit;

use Cit\Input\Route;
use Cit\Input\Router;

class Application
{
    // TODO:fix this, use di, or facade or whatever
    public $router;

    public function __construct(Route $route)
    {
        $this->router = new Router();
        $this->router->applyRoute($route);
    }

    public function run()
    {

    }
}
