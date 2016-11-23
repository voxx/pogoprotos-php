<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Quest/DailyQuestSettings.proto

namespace POGOProtos\Settings\Master\Quest;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class DailyQuestSettings extends \Google\Protobuf\Internal\Message
{
    private $buckets_per_day = 0;
    private $streak_length = 0;
    private $bonus_multiplier = 0.0;
    private $streak_bonus_multiplier = 0.0;

    public function getBucketsPerDay()
    {
        return $this->buckets_per_day;
    }

    public function setBucketsPerDay($var)
    {
        GPBUtil::checkInt32($var);
        $this->buckets_per_day = $var;
    }

    public function getStreakLength()
    {
        return $this->streak_length;
    }

    public function setStreakLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->streak_length = $var;
    }

    public function getBonusMultiplier()
    {
        return $this->bonus_multiplier;
    }

    public function setBonusMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->bonus_multiplier = $var;
    }

    public function getStreakBonusMultiplier()
    {
        return $this->streak_bonus_multiplier;
    }

    public function setStreakBonusMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->streak_bonus_multiplier = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae6010a39504f474f50726f746f732f53657474696e67732f4d61737465" .
    "722f51756573742f4461696c79517565737453657474696e67732e70726f" .
    "746f1220504f474f50726f746f732e53657474696e67732e4d6173746572" .
    "2e5175657374227f0a124461696c79517565737453657474696e67731217" .
    "0a0f6275636b6574735f7065725f64617918012001280512150a0d737472" .
    "65616b5f6c656e67746818022001280512180a10626f6e75735f6d756c74" .
    "69706c696572180320012802121f0a1773747265616b5f626f6e75735f6d" .
    "756c7469706c696572180420012802620670726f746f33"
));

