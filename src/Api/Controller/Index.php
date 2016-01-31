<?php
/**
 * 控制器测试类
 * Author: lifuren <frenlee@163.com>
 * Since: 16/1/31 11:53
 */

namespace Api\Controller;

class Index extends Controller
{
    function test()
    {
        $this->container->logger->info("Slim-Skeleton '/' route");
        $this->model('test');
        $ret = $this->test->getTest();
        $this->response->getBody()->write($ret[0]->title.'<hr>');
        $this->helper('baseHelper');
        $helper = $this->baseHelper->test('helpersss');
        $this->response->getBody()->write($helper);
        // Render index view
        return $this->container->renderer->render($this->response, 'index.phtml', $this->args);
    }

}