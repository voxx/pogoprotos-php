<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/BattleAttributes.proto

namespace POGOProtos\Settings\Master\Item;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class BattleAttributes extends \Google\Protobuf\Internal\Message
{
    private $sta_percent = 0.0;

    public function getStaPercent()
    {
        return $this->sta_percent;
    }

    public function setStaPercent($var)
    {
        GPBUtil::checkFloat($var);
        $this->sta_percent = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a8a010a36504f474f50726f746f732f53657474696e67732f4d61737465" .
    "722f4974656d2f426174746c65417474726962757465732e70726f746f12" .
    "1f504f474f50726f746f732e53657474696e67732e4d61737465722e4974" .
    "656d22270a10426174746c654174747269627574657312130a0b7374615f" .
    "70657263656e74180120012802620670726f746f33"
));

