<?php

/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午10:09
 */
namespace Cit\Exception\Database;

use Cit\Exception\HttpCode;

class Connection extends \Exception implements HttpCode
{
    const HOST_NOT_FOUND = 404;
    const WRONG_USER_NAME_OR_PASSWORD = 403;

    public function getHttpCode()
    {
        return 500;
    }
}
