<?php
/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-24
 * Time: 下午9:55
 */

namespace Cit\Exception\Auth;

final class NotAuthorized extends \Exception
{
    public function getHttpCode()
    {
        return 401;
    }
}
