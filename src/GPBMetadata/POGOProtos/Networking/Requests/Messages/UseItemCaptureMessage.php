<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/UseItemCaptureMessage.proto

namespace GPBMetadata\POGOProtos\Networking\Requests\Messages;

class UseItemCaptureMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a99020a43504f474f50726f746f732f4e6574776f726b696e672f526571" .
            "75657374732f4d657373616765732f5573654974656d436170747572654d" .
            "6573736167652e70726f746f1227504f474f50726f746f732e4e6574776f" .
            "726b696e672e52657175657374732e4d657373616765731a26504f474f50" .
            "726f746f732f496e76656e746f72792f4974656d2f4974656d49642e7072" .
            "6f746f22790a155573654974656d436170747572654d6573736167651232" .
            "0a076974656d5f696418012001280e32212e504f474f50726f746f732e49" .
            "6e76656e746f72792e4974656d2e4974656d496412140a0c656e636f756e" .
            "7465725f696418022001280612160a0e737061776e5f706f696e745f6964" .
            "180320012809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

