<?php
/**
 * 控制器基类
 * Author: lifuren <frenlee@163.com>
 * Since: 16/1/31 11:53
 */

namespace Api\Controller;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Api\Model;
use Slim\App;

abstract class Controller
{
    protected $request;
    protected $response;
    protected $args;
    protected $app;
    protected $container;

    function __construct(App $app,RequestInterface $request, ResponseInterface $response, $args = false)
    {
        $this->app = $app;
        $this->container = $app->getContainer();
        $this->request = $request;
        $this->response = $response;
        $this->args = $args;
    }

    function model($class)
    {
        $classFull = "Api\\Model\\".ucfirst($class);
        if (class_exists($classFull) && !isset($this->$class)) {
            $this->$class = new $classFull($this->container->db);
        }
    }

    function helper($class)
    {
        $classFull = "Api\\Helper\\".ucfirst($class);
        if (class_exists($classFull) && !isset($this->$class)) {
            $this->$class = new $classFull($this->container->db);
        }
    }
}