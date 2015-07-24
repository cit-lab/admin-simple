<?php

/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午9:54
 */
namespace Cit\Exception\Auth;

use Cit\Exception\HttpCode;

final class Forbidden extends \Exception implements HttpCode
{
    public function getHttpCode()
    {
        return 403;
    }
}
