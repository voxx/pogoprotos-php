<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/PlayerCurrency.proto

namespace POGOProtos\Data\Player;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class PlayerCurrency extends \Google\Protobuf\Internal\Message
{
    private $gems = 0;

    public function getGems()
    {
        return $this->gems;
    }

    public function setGems($var)
    {
        GPBUtil::checkInt32($var);
        $this->gems = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a6d0a2b504f474f50726f746f732f446174612f506c617965722f506c61" .
    "79657243757272656e63792e70726f746f1216504f474f50726f746f732e" .
    "446174612e506c61796572221e0a0e506c6179657243757272656e637912" .
    "0c0a0467656d73180120012805620670726f746f33"
));

