<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/LevelUpRewardsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class LevelUpRewardsMessage extends \Google\Protobuf\Internal\Message
{
    private $level = 0;

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->level = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9e010a43504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f4d657373616765732f4c6576656c5570526577617264734d" .
    "6573736167652e70726f746f1227504f474f50726f746f732e4e6574776f" .
    "726b696e672e52657175657374732e4d6573736167657322260a154c6576" .
    "656c5570526577617264734d657373616765120d0a056c6576656c180120" .
    "012805620670726f746f33"
));

