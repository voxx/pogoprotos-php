<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GetMapObjectsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class GetMapObjectsMessage extends \Google\Protobuf\Internal\Message
{
    private $cell_id;
    private $since_timestamp_ms;
    private $latitude = 0.0;
    private $longitude = 0.0;

    public function getCellId()
    {
        return $this->cell_id;
    }

    public function setCellId(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::UINT64);
        $this->cell_id = $var;
    }

    public function getSinceTimestampMs()
    {
        return $this->since_timestamp_ms;
    }

    public function setSinceTimestampMs(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT64);
        $this->since_timestamp_ms = $var;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae7010a42504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f4d657373616765732f4765744d61704f626a656374734d65" .
    "73736167652e70726f746f1227504f474f50726f746f732e4e6574776f72" .
    "6b696e672e52657175657374732e4d6573736167657322700a144765744d" .
    "61704f626a656374734d65737361676512130a0763656c6c5f6964180120" .
    "03280442021001121e0a1273696e63655f74696d657374616d705f6d7318" .
    "02200328034202100112100a086c6174697475646518032001280112110a" .
    "096c6f6e676974756465180420012801620670726f746f33"
));

