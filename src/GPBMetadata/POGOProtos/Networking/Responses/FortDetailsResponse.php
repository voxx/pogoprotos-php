<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/FortDetailsResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class FortDetailsResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\PokemonData::initOnce();
        \GPBMetadata\POGOProtos\Enums\TeamColor::initOnce();
        \GPBMetadata\POGOProtos\Map\Fort\FortType::initOnce();
        \GPBMetadata\POGOProtos\Map\Fort\FortModifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af4040a39504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f466f727444657461696c73526573706f6e73652e70726f" .
            "746f121f504f474f50726f746f732e4e6574776f726b696e672e52657370" .
            "6f6e7365731a21504f474f50726f746f732f446174612f506f6b656d6f6e" .
            "446174612e70726f746f1a20504f474f50726f746f732f456e756d732f54" .
            "65616d436f6c6f722e70726f746f1a22504f474f50726f746f732f4d6170" .
            "2f466f72742f466f7274547970652e70726f746f1a26504f474f50726f74" .
            "6f732f4d61702f466f72742f466f72744d6f6469666965722e70726f746f" .
            "22fc020a13466f727444657461696c73526573706f6e7365120f0a07666f" .
            "72745f6964180120012809122f0a0a7465616d5f636f6c6f721802200128" .
            "0e321b2e504f474f50726f746f732e456e756d732e5465616d436f6c6f72" .
            "12320a0c706f6b656d6f6e5f6461746118032001280b321c2e504f474f50" .
            "726f746f732e446174612e506f6b656d6f6e44617461120c0a046e616d65" .
            "18042001280912120a0a696d6167655f75726c73180520032809120a0a02" .
            "6670180620012805120f0a077374616d696e6118072001280512130a0b6d" .
            "61785f7374616d696e61180820012805122b0a047479706518092001280e" .
            "321d2e504f474f50726f746f732e4d61702e466f72742e466f7274547970" .
            "6512100a086c61746974756465180a2001280112110a096c6f6e67697475" .
            "6465180b2001280112130a0b6465736372697074696f6e180c2001280912" .
            "340a096d6f64696669657273180d2003280b32212e504f474f50726f746f" .
            "732e4d61702e466f72742e466f72744d6f646966696572620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}

