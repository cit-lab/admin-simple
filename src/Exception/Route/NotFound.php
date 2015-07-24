<?php

/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午10:01
 */
namespace Cit\Exception\Route;

use Cit\Exception\HttpCode;

final class NotFound extends \Exception implements HttpCode
{
    public function getHttpCode()
    {
        return 404;
    }
}
