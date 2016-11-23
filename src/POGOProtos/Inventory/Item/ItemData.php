<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/Item/ItemData.proto

namespace POGOProtos\Inventory\Item;


use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class ItemData extends \Google\Protobuf\Internal\Message
{
    private $item_id = 0;
    private $count = 0;
    private $unseen = false;

    public function getItemId()
    {
        return $this->item_id;
    }

    public function setItemId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item_id = $var;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;
    }

    public function getUnseen()
    {
        return $this->unseen;
    }

    public function setUnseen($var)
    {
        GPBUtil::checkBool($var);
        $this->unseen = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad4010a28504f474f50726f746f732f496e76656e746f72792f4974656d" .
    "2f4974656d446174612e70726f746f1219504f474f50726f746f732e496e" .
    "76656e746f72792e4974656d1a26504f474f50726f746f732f496e76656e" .
    "746f72792f4974656d2f4974656d49642e70726f746f225d0a084974656d" .
    "4461746112320a076974656d5f696418012001280e32212e504f474f5072" .
    "6f746f732e496e76656e746f72792e4974656d2e4974656d4964120d0a05" .
    "636f756e74180220012805120e0a06756e7365656e180320012808620670" .
    "726f746f33"
));

