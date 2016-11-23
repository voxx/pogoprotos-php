<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/EncounterMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class EncounterMessage extends \Google\Protobuf\Internal\Message
{
    private $encounter_id = 0;
    private $spawn_point_id = '';
    private $player_latitude = 0.0;
    private $player_longitude = 0.0;

    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    public function setEncounterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->encounter_id = $var;
    }

    public function getSpawnPointId()
    {
        return $this->spawn_point_id;
    }

    public function setSpawnPointId($var)
    {
        GPBUtil::checkString($var, True);
        $this->spawn_point_id = $var;
    }

    public function getPlayerLatitude()
    {
        return $this->player_latitude;
    }

    public function setPlayerLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_latitude = $var;
    }

    public function getPlayerLongitude()
    {
        return $this->player_longitude;
    }

    public function setPlayerLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_longitude = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae6010a3e504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f4d657373616765732f456e636f756e7465724d6573736167" .
    "652e70726f746f1227504f474f50726f746f732e4e6574776f726b696e67" .
    "2e52657175657374732e4d6573736167657322730a10456e636f756e7465" .
    "724d65737361676512140a0c656e636f756e7465725f6964180120012806" .
    "12160a0e737061776e5f706f696e745f696418022001280912170a0f706c" .
    "617965725f6c6174697475646518032001280112180a10706c617965725f" .
    "6c6f6e676974756465180420012801620670726f746f33"
));

