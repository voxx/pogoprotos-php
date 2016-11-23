<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetPlayerResponse.proto

namespace POGOProtos\Networking\Responses;


use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class GetPlayerResponse extends \Google\Protobuf\Internal\Message
{
    private $success = false;
    private $player_data = null;
    private $banned = false;
    private $warn = false;

    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;
    }

    public function getPlayerData()
    {
        return $this->player_data;
    }

    public function setPlayerData(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PlayerData::class);
        $this->player_data = $var;
    }

    public function getBanned()
    {
        return $this->banned;
    }

    public function setBanned($var)
    {
        GPBUtil::checkBool($var);
        $this->banned = $var;
    }

    public function getWarn()
    {
        return $this->warn;
    }

    public function setWarn($var)
    {
        GPBUtil::checkBool($var);
        $this->warn = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0afa010a37504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f476574506c61796572526573706f6e73652e70726f746f" .
    "121f504f474f50726f746f732e4e6574776f726b696e672e526573706f6e" .
    "7365731a20504f474f50726f746f732f446174612f506c61796572446174" .
    "612e70726f746f22740a11476574506c61796572526573706f6e7365120f" .
    "0a077375636365737318012001280812300a0b706c617965725f64617461" .
    "18022001280b321b2e504f474f50726f746f732e446174612e506c617965" .
    "7244617461120e0a0662616e6e6564180320012808120c0a047761726e18" .
    "0420012808620670726f746f33"
));

