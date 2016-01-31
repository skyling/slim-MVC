<?php
/**
 * 数据模型测试类
 * Author: lifuren <frenlee@163.com>
 * Since: 16/1/31 11:53
 */

namespace App\Model;


class Test extends Model
{
    function getTest()
    {
        $ret = $this->db->table('test')->where('id', '<', 100)->get();
        return $ret;
    }

}