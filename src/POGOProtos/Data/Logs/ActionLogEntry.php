<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Logs/ActionLogEntry.proto

namespace POGOProtos\Data\Logs;

require_once('POGOProtos/Data/Logs/CatchPokemonLogEntry.pb.php');
require_once('POGOProtos/Data/Logs/FortSearchLogEntry.pb.php');
require_once('POGOProtos/Data/Logs/BuddyPokemonLogEntry.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class ActionLogEntry extends \Google\Protobuf\Internal\Message
{
    private $timestamp_ms = 0;
    private $sfida = false;
    protected $Action;

    public function getTimestampMs()
    {
        return $this->timestamp_ms;
    }

    public function setTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_ms = $var;
    }

    public function getSfida()
    {
        return $this->sfida;
    }

    public function setSfida($var)
    {
        GPBUtil::checkBool($var);
        $this->sfida = $var;
    }

    public function getCatchPokemon()
    {
        return $this->readOneof(3);
    }

    public function setCatchPokemon(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\CatchPokemonLogEntry::class);
        $this->writeOneof(3, $var);
    }

    public function getFortSearch()
    {
        return $this->readOneof(4);
    }

    public function setFortSearch(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\FortSearchLogEntry::class);
        $this->writeOneof(4, $var);
    }

    public function getBuddyPokemon()
    {
        return $this->readOneof(5);
    }

    public function setBuddyPokemon(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Logs\BuddyPokemonLogEntry::class);
        $this->writeOneof(5, $var);
    }

    public function getAction()
    {
        return $this->Action;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae7030a29504f474f50726f746f732f446174612f4c6f67732f41637469" .
    "6f6e4c6f67456e7472792e70726f746f1214504f474f50726f746f732e44" .
    "6174612e4c6f67731a2f504f474f50726f746f732f446174612f4c6f6773" .
    "2f4361746368506f6b656d6f6e4c6f67456e7472792e70726f746f1a2d50" .
    "4f474f50726f746f732f446174612f4c6f67732f466f7274536561726368" .
    "4c6f67456e7472792e70726f746f1a2f504f474f50726f746f732f446174" .
    "612f4c6f67732f4275646479506f6b656d6f6e4c6f67456e7472792e7072" .
    "6f746f228a020a0e416374696f6e4c6f67456e74727912140a0c74696d65" .
    "7374616d705f6d73180120012803120d0a05736669646118022001280812" .
    "430a0d63617463685f706f6b656d6f6e18032001280b322a2e504f474f50" .
    "726f746f732e446174612e4c6f67732e4361746368506f6b656d6f6e4c6f" .
    "67456e7472794800123f0a0b666f72745f73656172636818042001280b32" .
    "282e504f474f50726f746f732e446174612e4c6f67732e466f7274536561" .
    "7263684c6f67456e747279480012430a0d62756464795f706f6b656d6f6e" .
    "18052001280b322a2e504f474f50726f746f732e446174612e4c6f67732e" .
    "4275646479506f6b656d6f6e4c6f67456e747279480042080a0641637469" .
    "6f6e620670726f746f33"
));

