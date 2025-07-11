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
 * 账号的数据库权限信息
 *
 * @method string getDBName() 获取数据库名
 * @method void setDBName(string $DBName) 设置数据库名
 * @method string getPrivilege() 获取数据库权限，ReadWrite表示可读写，ReadOnly表示只读，DBOwner所有者
 * @method void setPrivilege(string $Privilege) 设置数据库权限，ReadWrite表示可读写，ReadOnly表示只读，DBOwner所有者
 */
class DBPrivilege extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $DBName;

    /**
     * @var string 数据库权限，ReadWrite表示可读写，ReadOnly表示只读，DBOwner所有者
     */
    public $Privilege;

    /**
     * @param string $DBName 数据库名
     * @param string $Privilege 数据库权限，ReadWrite表示可读写，ReadOnly表示只读，DBOwner所有者
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
