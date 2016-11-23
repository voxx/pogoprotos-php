<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/AppliedItem.proto

namespace POGOProtos\Inventory;



use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class AppliedItem extends \Google\Protobuf\Internal\Message
{
    private $item_id = 0;
    private $item_type = 0;
    private $expire_ms = 0;
    private $applied_ms = 0;

    public function getItemId()
    {
        return $this->item_id;
    }

    public function setItemId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item_id = $var;
    }

    public function getItemType()
    {
        return $this->item_type;
    }

    public function setItemType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemType::class);
        $this->item_type = $var;
    }

    public function getExpireMs()
    {
        return $this->expire_ms;
    }

    public function setExpireMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire_ms = $var;
    }

    public function getAppliedMs()
    {
        return $this->applied_ms;
    }

    public function setAppliedMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->applied_ms = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0abb020a26504f474f50726f746f732f496e76656e746f72792f4170706c" .
    "6965644974656d2e70726f746f1214504f474f50726f746f732e496e7665" .
    "6e746f72791a26504f474f50726f746f732f496e76656e746f72792f4974" .
    "656d2f4974656d49642e70726f746f1a28504f474f50726f746f732f496e" .
    "76656e746f72792f4974656d2f4974656d547970652e70726f746f22a001" .
    "0a0b4170706c6965644974656d12320a076974656d5f696418012001280e" .
    "32212e504f474f50726f746f732e496e76656e746f72792e4974656d2e49" .
    "74656d496412360a096974656d5f7479706518022001280e32232e504f47" .
    "4f50726f746f732e496e76656e746f72792e4974656d2e4974656d547970" .
    "6512110a096578706972655f6d7318032001280312120a0a6170706c6965" .
    "645f6d73180420012803620670726f746f33"
));

