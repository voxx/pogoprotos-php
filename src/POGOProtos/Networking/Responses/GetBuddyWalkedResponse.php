<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetBuddyWalkedResponse.proto

namespace POGOProtos\Networking\Responses;


use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class GetBuddyWalkedResponse extends \Google\Protobuf\Internal\Message
{
    private $success = false;
    private $family_candy_id = 0;
    private $candy_earned_count = 0;

    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;
    }

    public function getFamilyCandyId()
    {
        return $this->family_candy_id;
    }

    public function setFamilyCandyId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonFamilyId::class);
        $this->family_candy_id = $var;
    }

    public function getCandyEarnedCount()
    {
        return $this->candy_earned_count;
    }

    public function setCandyEarnedCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->candy_earned_count = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a93020a3c504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f476574427564647957616c6b6564526573706f6e73652e" .
    "70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e52" .
    "6573706f6e7365731a26504f474f50726f746f732f456e756d732f506f6b" .
    "656d6f6e46616d696c7949642e70726f746f2281010a1647657442756464" .
    "7957616c6b6564526573706f6e7365120f0a077375636365737318012001" .
    "2808123a0a0f66616d696c795f63616e64795f696418022001280e32212e" .
    "504f474f50726f746f732e456e756d732e506f6b656d6f6e46616d696c79" .
    "4964121a0a1263616e64795f6561726e65645f636f756e74180320012805" .
    "620670726f746f33"
));

