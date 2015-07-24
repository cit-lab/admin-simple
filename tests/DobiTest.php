<?php

/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午9:59
 */
class DobiTest extends PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        try {
            throw new Cit\Exception\Doubi();

        } catch (Cit\Exception\Doubi $e) {
            $this->assertEquals('I am a doubi!', $e->whoAreU());
        }
    }
}