<?php
/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午10:19
 */
class RouterTest extends PHPUnit_Framework_TestCase
{
    public function testDetect()
    {
        $r = new \Cit\Input\Router();
        $this->assertEquals(true,$r->isCli());
        // TODO:how to test http
    }
}