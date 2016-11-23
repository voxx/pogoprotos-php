<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/FortDetailsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class FortDetailsMessage extends \Google\Protobuf\Internal\Message
{
    private $fort_id = '';
    private $latitude = 0.0;
    private $longitude = 0.0;

    public function getFortId()
    {
        return $this->fort_id;
    }

    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;
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
    "0abf010a40504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f4d657373616765732f466f727444657461696c734d657373" .
    "6167652e70726f746f1227504f474f50726f746f732e4e6574776f726b69" .
    "6e672e52657175657374732e4d65737361676573224a0a12466f72744465" .
    "7461696c734d657373616765120f0a07666f72745f696418012001280912" .
    "100a086c6174697475646518022001280112110a096c6f6e676974756465" .
    "180320012801620670726f746f33"
));

