<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Map/Fort/FortSummary.proto

namespace POGOProtos\Map\Fort;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class FortSummary extends \Google\Protobuf\Internal\Message
{
    private $fort_summary_id = '';
    private $last_modified_timestamp_ms = 0;
    private $latitude = 0.0;
    private $longitude = 0.0;

    public function getFortSummaryId()
    {
        return $this->fort_summary_id;
    }

    public function setFortSummaryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_summary_id = $var;
    }

    public function getLastModifiedTimestampMs()
    {
        return $this->last_modified_timestamp_ms;
    }

    public function setLastModifiedTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_modified_timestamp_ms = $var;
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
    "0ab5010a25504f474f50726f746f732f4d61702f466f72742f466f727453" .
    "756d6d6172792e70726f746f1213504f474f50726f746f732e4d61702e46" .
    "6f7274226f0a0b466f727453756d6d61727912170a0f666f72745f73756d" .
    "6d6172795f696418012001280912220a1a6c6173745f6d6f646966696564" .
    "5f74696d657374616d705f6d7318022001280312100a086c617469747564" .
    "6518032001280112110a096c6f6e67697475646518042001280162067072" .
    "6f746f33"
));

