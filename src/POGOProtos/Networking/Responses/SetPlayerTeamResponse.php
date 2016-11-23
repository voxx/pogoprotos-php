<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/SetPlayerTeamResponse.proto

namespace POGOProtos\Networking\Responses;


use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class SetPlayerTeamResponse extends \Google\Protobuf\Internal\Message
{
    private $status = 0;
    private $player_data = null;

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\SetPlayerTeamResponse_Status::class);
        $this->status = $var;
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

}

class SetPlayerTeamResponse_Status
{
    const UNSET = 0;
    const SUCCESS = 1;
    const TEAM_ALREADY_SET = 2;
    const FAILURE = 3;
}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae8020a3b504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f536574506c617965725465616d526573706f6e73652e70" .
    "726f746f121f504f474f50726f746f732e4e6574776f726b696e672e5265" .
    "73706f6e7365731a20504f474f50726f746f732f446174612f506c617965" .
    "72446174612e70726f746f22dd010a15536574506c617965725465616d52" .
    "6573706f6e7365124d0a0673746174757318012001280e323d2e504f474f" .
    "50726f746f732e4e6574776f726b696e672e526573706f6e7365732e5365" .
    "74506c617965725465616d526573706f6e73652e53746174757312300a0b" .
    "706c617965725f6461746118022001280b321b2e504f474f50726f746f73" .
    "2e446174612e506c617965724461746122430a0653746174757312090a05" .
    "554e5345541000120b0a0753554343455353100112140a105445414d5f41" .
    "4c52454144595f5345541002120b0a074641494c5552451003620670726f" .
    "746f33"
));

