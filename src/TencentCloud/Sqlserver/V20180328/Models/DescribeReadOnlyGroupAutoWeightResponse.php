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
 * DescribeReadOnlyGroupAutoWeight返回参数结构体
 *
 * @method string getReadOnlyGroupId() 获取只读组ID，格式如：mssqlro-3l3fgqn7
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组ID，格式如：mssqlro-3l3fgqn7
 * @method string getReadOnlyGroupName() 获取只读组名称
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) 设置只读组名称
 * @method string getRegionId() 获取只读组的地域ID，与主实例相同
 * @method void setRegionId(string $RegionId) 设置只读组的地域ID，与主实例相同
 * @method string getZoneId() 获取只读组的可用区，与主实例相同
 * @method void setZoneId(string $ZoneId) 设置只读组的可用区，与主实例相同
 * @method integer getIsOfflineDelay() 获取是否启动超时剔除功能，1-开启，0-不开启
 * @method void setIsOfflineDelay(integer $IsOfflineDelay) 设置是否启动超时剔除功能，1-开启，0-不开启
 * @method integer getReadOnlyMaxDelayTime() 获取启动超时剔除功能后，使用的超时阈值(秒)
 * @method void setReadOnlyMaxDelayTime(integer $ReadOnlyMaxDelayTime) 设置启动超时剔除功能后，使用的超时阈值(秒)
 * @method integer getMinReadOnlyInGroup() 获取启动超时剔除功能后，至少只读组保留的只读副本数
 * @method void setMinReadOnlyInGroup(integer $MinReadOnlyInGroup) 设置启动超时剔除功能后，至少只读组保留的只读副本数
 * @method string getVip() 获取只读组vip
 * @method void setVip(string $Vip) 设置只读组vip
 * @method integer getVport() 获取只读组vport
 * @method void setVport(integer $Vport) 设置只读组vport
 * @method string getVpcId() 获取只读组在私有网络ID
 * @method void setVpcId(string $VpcId) 设置只读组在私有网络ID
 * @method string getSubnetId() 获取只读组在私有网络子网ID
 * @method void setSubnetId(string $SubnetId) 设置只读组在私有网络子网ID
 * @method array getReadOnlyInstanceSet() 获取只读实例副本集合
 * @method void setReadOnlyInstanceSet(array $ReadOnlyInstanceSet) 设置只读实例副本集合
 * @method integer getStatus() 获取只读组状态: 1-申请成功运行中，5-申请中
 * @method void setStatus(integer $Status) 设置只读组状态: 1-申请成功运行中，5-申请中
 * @method string getMasterInstanceId() 获取主实例ID，形如mssql-sgeshe3th
 * @method void setMasterInstanceId(string $MasterInstanceId) 设置主实例ID，形如mssql-sgeshe3th
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeReadOnlyGroupAutoWeightResponse extends AbstractModel
{
    /**
     * @var string 只读组ID，格式如：mssqlro-3l3fgqn7
     */
    public $ReadOnlyGroupId;

    /**
     * @var string 只读组名称
     */
    public $ReadOnlyGroupName;

    /**
     * @var string 只读组的地域ID，与主实例相同
     */
    public $RegionId;

    /**
     * @var string 只读组的可用区，与主实例相同
     */
    public $ZoneId;

    /**
     * @var integer 是否启动超时剔除功能，1-开启，0-不开启
     */
    public $IsOfflineDelay;

    /**
     * @var integer 启动超时剔除功能后，使用的超时阈值(秒)
     */
    public $ReadOnlyMaxDelayTime;

    /**
     * @var integer 启动超时剔除功能后，至少只读组保留的只读副本数
     */
    public $MinReadOnlyInGroup;

    /**
     * @var string 只读组vip
     */
    public $Vip;

    /**
     * @var integer 只读组vport
     */
    public $Vport;

    /**
     * @var string 只读组在私有网络ID
     */
    public $VpcId;

    /**
     * @var string 只读组在私有网络子网ID
     */
    public $SubnetId;

    /**
     * @var array 只读实例副本集合
     */
    public $ReadOnlyInstanceSet;

    /**
     * @var integer 只读组状态: 1-申请成功运行中，5-申请中
     */
    public $Status;

    /**
     * @var string 主实例ID，形如mssql-sgeshe3th
     */
    public $MasterInstanceId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ReadOnlyGroupId 只读组ID，格式如：mssqlro-3l3fgqn7
     * @param string $ReadOnlyGroupName 只读组名称
     * @param string $RegionId 只读组的地域ID，与主实例相同
     * @param string $ZoneId 只读组的可用区，与主实例相同
     * @param integer $IsOfflineDelay 是否启动超时剔除功能，1-开启，0-不开启
     * @param integer $ReadOnlyMaxDelayTime 启动超时剔除功能后，使用的超时阈值(秒)
     * @param integer $MinReadOnlyInGroup 启动超时剔除功能后，至少只读组保留的只读副本数
     * @param string $Vip 只读组vip
     * @param integer $Vport 只读组vport
     * @param string $VpcId 只读组在私有网络ID
     * @param string $SubnetId 只读组在私有网络子网ID
     * @param array $ReadOnlyInstanceSet 只读实例副本集合
     * @param integer $Status 只读组状态: 1-申请成功运行中，5-申请中
     * @param string $MasterInstanceId 主实例ID，形如mssql-sgeshe3th
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("IsOfflineDelay",$param) and $param["IsOfflineDelay"] !== null) {
            $this->IsOfflineDelay = $param["IsOfflineDelay"];
        }

        if (array_key_exists("ReadOnlyMaxDelayTime",$param) and $param["ReadOnlyMaxDelayTime"] !== null) {
            $this->ReadOnlyMaxDelayTime = $param["ReadOnlyMaxDelayTime"];
        }

        if (array_key_exists("MinReadOnlyInGroup",$param) and $param["MinReadOnlyInGroup"] !== null) {
            $this->MinReadOnlyInGroup = $param["MinReadOnlyInGroup"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ReadOnlyInstanceSet",$param) and $param["ReadOnlyInstanceSet"] !== null) {
            $this->ReadOnlyInstanceSet = [];
            foreach ($param["ReadOnlyInstanceSet"] as $key => $value){
                $obj = new ReadOnlyInstance();
                $obj->deserialize($value);
                array_push($this->ReadOnlyInstanceSet, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->MasterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
