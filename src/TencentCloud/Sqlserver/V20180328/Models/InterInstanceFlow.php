<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例开通或者关闭互通组后的状态
 *
 * @method string getInstanceId() 获取实例ID，例如：mssql-sdf32n1d
 * @method void setInstanceId(string $InstanceId) 设置实例ID，例如：mssql-sdf32n1d
 * @method integer getFlowId() 获取实例开通或者关闭互通组的流程ID，FlowId小于0-开通或者关闭失败，反之则成功。
 * @method void setFlowId(integer $FlowId) 设置实例开通或者关闭互通组的流程ID，FlowId小于0-开通或者关闭失败，反之则成功。
 */
class InterInstanceFlow extends AbstractModel
{
    /**
     * @var string 实例ID，例如：mssql-sdf32n1d
     */
    public $InstanceId;

    /**
     * @var integer 实例开通或者关闭互通组的流程ID，FlowId小于0-开通或者关闭失败，反之则成功。
     */
    public $FlowId;

    /**
     * @param string $InstanceId 实例ID，例如：mssql-sdf32n1d
     * @param integer $FlowId 实例开通或者关闭互通组的流程ID，FlowId小于0-开通或者关闭失败，反之则成功。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
