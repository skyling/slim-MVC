<?php
/**
 * 数据模型基类
 * Author: lifuren <frenlee@163.com>
 * Since: 16/1/31 11:53
 */

namespace App\Model;


use Illuminate\Database\Capsule\Manager;

abstract class Model
{

    protected $db;
    function __construct(Manager $db)
    {
        $this->db = $db;
    }

}