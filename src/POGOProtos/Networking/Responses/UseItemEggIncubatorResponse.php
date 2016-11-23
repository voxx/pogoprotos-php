<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemEggIncubatorResponse.proto

namespace POGOProtos\Networking\Responses;


use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class UseItemEggIncubatorResponse extends \Google\Protobuf\Internal\Message
{
    private $result = 0;
    private $egg_incubator = null;

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\UseItemEggIncubatorResponse_Result::class);
        $this->result = $var;
    }

    public function getEggIncubator()
    {
        return $this->egg_incubator;
    }

    public function setEggIncubator(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\EggIncubator::class);
        $this->egg_incubator = $var;
    }

}

class UseItemEggIncubatorResponse_Result
{
    const UNSET = 0;
    const SUCCESS = 1;
    const ERROR_INCUBATOR_NOT_FOUND = 2;
    const ERROR_POKEMON_EGG_NOT_FOUND = 3;
    const ERROR_POKEMON_ID_NOT_EGG = 4;
    const ERROR_INCUBATOR_ALREADY_IN_USE = 5;
    const ERROR_POKEMON_ALREADY_INCUBATING = 6;
    const ERROR_INCUBATOR_NO_USES_REMAINING = 7;
}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab7040a41504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f5573654974656d456767496e63756261746f7252657370" .
    "6f6e73652e70726f746f121f504f474f50726f746f732e4e6574776f726b" .
    "696e672e526573706f6e7365731a27504f474f50726f746f732f496e7665" .
    "6e746f72792f456767496e63756261746f722e70726f746f229f030a1b55" .
    "73654974656d456767496e63756261746f72526573706f6e736512530a06" .
    "726573756c7418012001280e32432e504f474f50726f746f732e4e657477" .
    "6f726b696e672e526573706f6e7365732e5573654974656d456767496e63" .
    "756261746f72526573706f6e73652e526573756c7412390a0d6567675f69" .
    "6e63756261746f7218022001280b32222e504f474f50726f746f732e496e" .
    "76656e746f72792e456767496e63756261746f7222ef010a06526573756c" .
    "7412090a05554e5345541000120b0a07535543434553531001121d0a1945" .
    "52524f525f494e43554241544f525f4e4f545f464f554e441002121f0a1b" .
    "4552524f525f504f4b454d4f4e5f4547475f4e4f545f464f554e44100312" .
    "1c0a184552524f525f504f4b454d4f4e5f49445f4e4f545f454747100412" .
    "220a1e4552524f525f494e43554241544f525f414c52454144595f494e5f" .
    "555345100512240a204552524f525f504f4b454d4f4e5f414c5245414459" .
    "5f494e4355424154494e47100612250a214552524f525f494e4355424154" .
    "4f525f4e4f5f555345535f52454d41494e494e471007620670726f746f33"
));

