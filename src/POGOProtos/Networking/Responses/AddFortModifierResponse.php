<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/AddFortModifierResponse.proto

namespace POGOProtos\Networking\Responses;


use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class AddFortModifierResponse extends \Google\Protobuf\Internal\Message
{
    private $result = 0;
    private $fort_details = null;

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\AddFortModifierResponse_Result::class);
        $this->result = $var;
    }

    public function getFortDetails()
    {
        return $this->fort_details;
    }

    public function setFortDetails(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Responses\FortDetailsResponse::class);
        $this->fort_details = $var;
    }

}

class AddFortModifierResponse_Result
{
    const NO_RESULT_SET = 0;
    const SUCCESS = 1;
    const FORT_ALREADY_HAS_MODIFIER = 2;
    const TOO_FAR_AWAY = 3;
    const NO_ITEM_IN_INVENTORY = 4;
}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad1030a3d504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f416464466f72744d6f646966696572526573706f6e7365" .
    "2e70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e" .
    "526573706f6e7365731a39504f474f50726f746f732f4e6574776f726b69" .
    "6e672f526573706f6e7365732f466f727444657461696c73526573706f6e" .
    "73652e70726f746f22ab020a17416464466f72744d6f6469666965725265" .
    "73706f6e7365124f0a06726573756c7418012001280e323f2e504f474f50" .
    "726f746f732e4e6574776f726b696e672e526573706f6e7365732e416464" .
    "466f72744d6f646966696572526573706f6e73652e526573756c74124a0a" .
    "0c666f72745f64657461696c7318022001280b32342e504f474f50726f74" .
    "6f732e4e6574776f726b696e672e526573706f6e7365732e466f72744465" .
    "7461696c73526573706f6e736522730a06526573756c7412110a0d4e4f5f" .
    "524553554c545f5345541000120b0a07535543434553531001121d0a1946" .
    "4f52545f414c52454144595f4841535f4d4f444946494552100212100a0c" .
    "544f4f5f4641525f41574159100312180a144e4f5f4954454d5f494e5f49" .
    "4e56454e544f52591004620670726f746f33"
));

