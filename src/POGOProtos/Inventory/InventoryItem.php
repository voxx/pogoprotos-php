<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/InventoryItem.proto

namespace POGOProtos\Inventory;


use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class InventoryItem extends \Google\Protobuf\Internal\Message
{
    private $modified_timestamp_ms = 0;
    private $deleted_item = null;
    private $inventory_item_data = null;

    public function getModifiedTimestampMs()
    {
        return $this->modified_timestamp_ms;
    }

    public function setModifiedTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->modified_timestamp_ms = $var;
    }

    public function getDeletedItem()
    {
        return $this->deleted_item;
    }

    public function setDeletedItem(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\InventoryItem_DeletedItem::class);
        $this->deleted_item = $var;
    }

    public function getInventoryItemData()
    {
        return $this->inventory_item_data;
    }

    public function setInventoryItemData(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\InventoryItemData::class);
        $this->inventory_item_data = $var;
    }

}

class InventoryItem_DeletedItem extends \Google\Protobuf\Internal\Message
{
    private $pokemon_id = 0;

    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad7020a28504f474f50726f746f732f496e76656e746f72792f496e7665" .
    "6e746f72794974656d2e70726f746f1214504f474f50726f746f732e496e" .
    "76656e746f72791a2c504f474f50726f746f732f496e76656e746f72792f" .
    "496e76656e746f72794974656d446174612e70726f746f22de010a0d496e" .
    "76656e746f72794974656d121d0a156d6f6469666965645f74696d657374" .
    "616d705f6d7318012001280312450a0c64656c657465645f6974656d1802" .
    "2001280b322f2e504f474f50726f746f732e496e76656e746f72792e496e" .
    "76656e746f72794974656d2e44656c657465644974656d12440a13696e76" .
    "656e746f72795f6974656d5f6461746118032001280b32272e504f474f50" .
    "726f746f732e496e76656e746f72792e496e76656e746f72794974656d44" .
    "6174611a210a0b44656c657465644974656d12120a0a706f6b656d6f6e5f" .
    "6964180120012806620670726f746f33"
));

