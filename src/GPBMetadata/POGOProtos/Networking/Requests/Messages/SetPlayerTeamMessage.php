<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/SetPlayerTeamMessage.proto

namespace GPBMetadata\POGOProtos\Networking\Requests\Messages;

class SetPlayerTeamMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\TeamColor::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ada010a42504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f4d657373616765732f536574506c617965725465616d4d65" .
            "73736167652e70726f746f1227504f474f50726f746f732e4e6574776f72" .
            "6b696e672e52657175657374732e4d657373616765731a20504f474f5072" .
            "6f746f732f456e756d732f5465616d436f6c6f722e70726f746f22410a14" .
            "536574506c617965725465616d4d65737361676512290a047465616d1801" .
            "2001280e321b2e504f474f50726f746f732e456e756d732e5465616d436f" .
            "6c6f72620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
