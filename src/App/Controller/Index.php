<?php
/**
 * 控制器测试类
 * Author: lifuren <frenlee@163.com>
 * Since: 16/1/31 11:53
 */

namespace App\Controller;

class Index extends Controller
{
    function test()
    {
        $this->container->logger->info("Slim-Skeleton '/' route");
        $this->model('test');
        $ret = $this->test->getTest();
        var_dump($ret);
        $this->helper('baseHelper');
        $helper = $this->baseHelper->test('helper');
        var_dump($helper);
        // Render index view
        return $this->container->renderer->render($this->response, 'index.phtml', $this->args);
    }

}