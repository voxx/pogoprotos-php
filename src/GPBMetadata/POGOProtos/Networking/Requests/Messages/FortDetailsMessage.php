<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/FortDetailsMessage.proto

namespace GPBMetadata\POGOProtos\Networking\Requests\Messages;

class FortDetailsMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0abf010a40504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f4d657373616765732f466f727444657461696c734d657373" .
            "6167652e70726f746f1227504f474f50726f746f732e4e6574776f726b69" .
            "6e672e52657175657374732e4d65737361676573224a0a12466f72744465" .
            "7461696c734d657373616765120f0a07666f72745f696418012001280912" .
            "100a086c6174697475646518022001280112110a096c6f6e676974756465" .
            "180320012801620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
