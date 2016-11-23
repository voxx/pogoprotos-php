<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Map/Fort/FortModifier.proto

namespace POGOProtos\Map\Fort;

require_once('POGOProtos/Inventory/Item/ItemId.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class FortModifier extends \Google\Protobuf\Internal\Message
{
    private $item_id = 0;
    private $expiration_timestamp_ms = 0;
    private $deployer_player_codename = '';

    public function getItemId()
    {
        return $this->item_id;
    }

    public function setItemId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item_id = $var;
    }

    public function getExpirationTimestampMs()
    {
        return $this->expiration_timestamp_ms;
    }

    public function setExpirationTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiration_timestamp_ms = $var;
    }

    public function getDeployerPlayerCodename()
    {
        return $this->deployer_player_codename;
    }

    public function setDeployerPlayerCodename($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployer_player_codename = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af5010a26504f474f50726f746f732f4d61702f466f72742f466f72744d" .
    "6f6469666965722e70726f746f1213504f474f50726f746f732e4d61702e" .
    "466f72741a26504f474f50726f746f732f496e76656e746f72792f497465" .
    "6d2f4974656d49642e70726f746f2285010a0c466f72744d6f6469666965" .
    "7212320a076974656d5f696418012001280e32212e504f474f50726f746f" .
    "732e496e76656e746f72792e4974656d2e4974656d4964121f0a17657870" .
    "69726174696f6e5f74696d657374616d705f6d7318022001280312200a18" .
    "6465706c6f7965725f706c617965725f636f64656e616d65180320012809" .
    "620670726f746f33"
));

