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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceBuyVsm返回参数结构体
 *
 * @method float getTotalCost() 获取原始总金额，浮点型参数，精确到小数点后两位，如：2000.99
 * @method void setTotalCost(float $TotalCost) 设置原始总金额，浮点型参数，精确到小数点后两位，如：2000.99
 * @method integer getGoodsNum() 获取购买的实例数量
 * @method void setGoodsNum(integer $GoodsNum) 设置购买的实例数量
 * @method string getTimeSpan() 获取商品的时间大小，整型参数，举例：当TimeSpan为1，TImeUnit为m时，表示询价购买时长为1个月时的价格
 * @method void setTimeSpan(string $TimeSpan) 设置商品的时间大小，整型参数，举例：当TimeSpan为1，TImeUnit为m时，表示询价购买时长为1个月时的价格
 * @method string getTimeUnit() 获取商品的时间单位，m表示月，y表示年
 * @method void setTimeUnit(string $TimeUnit) 设置商品的时间单位，m表示月，y表示年
 * @method float getOriginalCost() 获取应付总金额，浮点型参数，精确到小数点后两位，如：2000.99
 * @method void setOriginalCost(float $OriginalCost) 设置应付总金额，浮点型参数，精确到小数点后两位，如：2000.99
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InquiryPriceBuyVsmResponse extends AbstractModel
{
    /**
     * @var float 原始总金额，浮点型参数，精确到小数点后两位，如：2000.99
     */
    public $TotalCost;

    /**
     * @var integer 购买的实例数量
     */
    public $GoodsNum;

    /**
     * @var string 商品的时间大小，整型参数，举例：当TimeSpan为1，TImeUnit为m时，表示询价购买时长为1个月时的价格
     */
    public $TimeSpan;

    /**
     * @var string 商品的时间单位，m表示月，y表示年
     */
    public $TimeUnit;

    /**
     * @var float 应付总金额，浮点型参数，精确到小数点后两位，如：2000.99
     */
    public $OriginalCost;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $TotalCost 原始总金额，浮点型参数，精确到小数点后两位，如：2000.99
     * @param integer $GoodsNum 购买的实例数量
     * @param string $TimeSpan 商品的时间大小，整型参数，举例：当TimeSpan为1，TImeUnit为m时，表示询价购买时长为1个月时的价格
     * @param string $TimeUnit 商品的时间单位，m表示月，y表示年
     * @param float $OriginalCost 应付总金额，浮点型参数，精确到小数点后两位，如：2000.99
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
        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
