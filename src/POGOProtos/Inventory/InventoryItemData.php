<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/InventoryItemData.proto

namespace POGOProtos\Inventory;












use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class InventoryItemData extends \Google\Protobuf\Internal\Message
{
    private $pokemon_data = null;
    private $item = null;
    private $pokedex_entry = null;
    private $player_stats = null;
    private $player_currency = null;
    private $player_camera = null;
    private $inventory_upgrades = null;
    private $applied_items = null;
    private $egg_incubators = null;
    private $candy = null;
    private $quest = null;

    public function getPokemonData()
    {
        return $this->pokemon_data;
    }

    public function setPokemonData(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->pokemon_data = $var;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Item\ItemData::class);
        $this->item = $var;
    }

    public function getPokedexEntry()
    {
        return $this->pokedex_entry;
    }

    public function setPokedexEntry(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokedexEntry::class);
        $this->pokedex_entry = $var;
    }

    public function getPlayerStats()
    {
        return $this->player_stats;
    }

    public function setPlayerStats(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerStats::class);
        $this->player_stats = $var;
    }

    public function getPlayerCurrency()
    {
        return $this->player_currency;
    }

    public function setPlayerCurrency(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerCurrency::class);
        $this->player_currency = $var;
    }

    public function getPlayerCamera()
    {
        return $this->player_camera;
    }

    public function setPlayerCamera(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerCamera::class);
        $this->player_camera = $var;
    }

    public function getInventoryUpgrades()
    {
        return $this->inventory_upgrades;
    }

    public function setInventoryUpgrades(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\InventoryUpgrades::class);
        $this->inventory_upgrades = $var;
    }

    public function getAppliedItems()
    {
        return $this->applied_items;
    }

    public function setAppliedItems(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\AppliedItems::class);
        $this->applied_items = $var;
    }

    public function getEggIncubators()
    {
        return $this->egg_incubators;
    }

    public function setEggIncubators(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\EggIncubators::class);
        $this->egg_incubators = $var;
    }

    public function getCandy()
    {
        return $this->candy;
    }

    public function setCandy(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Candy::class);
        $this->candy = $var;
    }

    public function getQuest()
    {
        return $this->quest;
    }

    public function setQuest(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\Quest::class);
        $this->quest = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a89090a2c504f474f50726f746f732f496e76656e746f72792f496e7665" .
    "6e746f72794974656d446174612e70726f746f1214504f474f50726f746f" .
    "732e496e76656e746f72791a28504f474f50726f746f732f496e76656e74" .
    "6f72792f4974656d2f4974656d446174612e70726f746f1a27504f474f50" .
    "726f746f732f496e76656e746f72792f4170706c6965644974656d732e70" .
    "726f746f1a28504f474f50726f746f732f496e76656e746f72792f456767" .
    "496e63756261746f72732e70726f746f1a20504f474f50726f746f732f49" .
    "6e76656e746f72792f43616e64792e70726f746f1a2c504f474f50726f74" .
    "6f732f496e76656e746f72792f496e76656e746f72795570677261646573" .
    "2e70726f746f1a21504f474f50726f746f732f446174612f506f6b656d6f" .
    "6e446174612e70726f746f1a22504f474f50726f746f732f446174612f50" .
    "6f6b65646578456e7472792e70726f746f1a28504f474f50726f746f732f" .
    "446174612f506c617965722f506c6179657253746174732e70726f746f1a" .
    "2b504f474f50726f746f732f446174612f506c617965722f506c61796572" .
    "43757272656e63792e70726f746f1a29504f474f50726f746f732f446174" .
    "612f506c617965722f506c6179657243616d6572612e70726f746f1a2250" .
    "4f474f50726f746f732f446174612f5175657374732f51756573742e7072" .
    "6f746f2280050a11496e76656e746f72794974656d4461746112320a0c70" .
    "6f6b656d6f6e5f6461746118012001280b321c2e504f474f50726f746f73" .
    "2e446174612e506f6b656d6f6e4461746112310a046974656d1802200128" .
    "0b32232e504f474f50726f746f732e496e76656e746f72792e4974656d2e" .
    "4974656d4461746112340a0d706f6b656465785f656e7472791803200128" .
    "0b321d2e504f474f50726f746f732e446174612e506f6b65646578456e74" .
    "727912390a0c706c617965725f737461747318042001280b32232e504f47" .
    "4f50726f746f732e446174612e506c617965722e506c6179657253746174" .
    "73123f0a0f706c617965725f63757272656e637918052001280b32262e50" .
    "4f474f50726f746f732e446174612e506c617965722e506c617965724375" .
    "7272656e6379123b0a0d706c617965725f63616d65726118062001280b32" .
    "242e504f474f50726f746f732e446174612e506c617965722e506c617965" .
    "7243616d65726112430a12696e76656e746f72795f757067726164657318" .
    "072001280b32272e504f474f50726f746f732e496e76656e746f72792e49" .
    "6e76656e746f7279557067726164657312390a0d6170706c6965645f6974" .
    "656d7318082001280b32222e504f474f50726f746f732e496e76656e746f" .
    "72792e4170706c6965644974656d73123b0a0e6567675f696e6375626174" .
    "6f727318092001280b32232e504f474f50726f746f732e496e76656e746f" .
    "72792e456767496e63756261746f7273122a0a0563616e6479180a200128" .
    "0b321b2e504f474f50726f746f732e496e76656e746f72792e43616e6479" .
    "122c0a057175657374180b2001280b321d2e504f474f50726f746f732e44" .
    "6174612e5175657374732e5175657374620670726f746f33"
));

