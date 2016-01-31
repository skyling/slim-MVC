<?php
/**
 * 中间件测试类
 * Author: lifuren <frenlee@163.com>
 * Since: 16/1/31 11:53
 */

namespace App\MiddleWare;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Test
{
    function __invoke(RequestInterface $req, ResponseInterface $res, $next)
    {
        $res->getBody()->write('Before ');
        $res = $next($req, $res);
        $res->getBody()->write(' After');
        return $res;
    }
}