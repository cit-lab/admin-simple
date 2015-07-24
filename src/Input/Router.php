<?php
/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午10:16
 */

namespace Cit\Input;

class Router
{
    const CLI = 1;
    const HTTP = 2;

    protected $route;
    protected $inputType;

    public function __construct()
    {
        $this->detect();
    }

    public function applyRoute(Route $route)
    {
        $this->route = $route;
    }

    public function handle()
    {
        // TODO:detect the agent.
    }

    public function isCli()
    {
        return $this->inputType === Router::CLI;
    }

    protected function detect()
    {
        if (php_sapi_name() == 'cli') {
            $this->inputType = Router::CLI;
        } else {
            $this->inputType = Router::HTTP;
        }
        return $this->inputType;
    }
}
