<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemGymResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class UseItemGymResponse extends \Google\Protobuf\Internal\Message
{
    private $result = 0;
    private $updated_gp = 0;

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\UseItemGymResponse_Result::class);
        $this->result = $var;
    }

    public function getUpdatedGp()
    {
        return $this->updated_gp;
    }

    public function setUpdatedGp($var)
    {
        GPBUtil::checkInt64($var);
        $this->updated_gp = $var;
    }

}

class UseItemGymResponse_Result
{
    const UNSET = 0;
    const SUCCESS = 1;
    const ERROR_CANNOT_USE = 2;
    const ERROR_NOT_IN_RANGE = 3;
}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aaa020a38504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f5573654974656d47796d526573706f6e73652e70726f74" .
    "6f121f504f474f50726f746f732e4e6574776f726b696e672e526573706f" .
    "6e73657322c4010a125573654974656d47796d526573706f6e7365124a0a" .
    "06726573756c7418012001280e323a2e504f474f50726f746f732e4e6574" .
    "776f726b696e672e526573706f6e7365732e5573654974656d47796d5265" .
    "73706f6e73652e526573756c7412120a0a757064617465645f6770180220" .
    "012803224e0a06526573756c7412090a05554e5345541000120b0a075355" .
    "4343455353100112140a104552524f525f43414e4e4f545f555345100212" .
    "160a124552524f525f4e4f545f494e5f52414e47451003620670726f746f" .
    "33"
));

