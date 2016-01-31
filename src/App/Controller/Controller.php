<?php
/**
 * 控制器基类
 * Author: lifuren <frenlee@163.com>
 * Since: 16/1/31 11:53
 */

namespace App\Controller;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Model;

abstract class Controller
{
    protected $request;
    protected $response;
    protected $args;
    protected $app;
    protected $container;

    function __construct(\Slim\App $app,RequestInterface $request, ResponseInterface $response, $args = false)
    {
        $this->app = $app;
        $this->container = $app->getContainer();
        $this->request = $request;
        $this->response = $response;
        $this->args = $args;
    }

    function model($class)
    {
        $classFull = "App\\Model\\".ucfirst($class);
        if (class_exists($classFull) && !isset($this->$class)) {
            $this->$class = new $classFull($this->container->db);
        }
    }

    function helper($class)
    {
        $classFull = "App\\Helper\\".ucfirst($class);
        if (class_exists($classFull) && !isset($this->$class)) {
            $this->$class = new $classFull($this->container->db);
        }
    }
}