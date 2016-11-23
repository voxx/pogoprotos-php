<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleAction.proto

namespace POGOProtos\Data\Battle;




use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class BattleAction extends \Google\Protobuf\Internal\Message
{
    private $type = 0;
    private $action_start_ms = 0;
    private $duration_ms = 0;
    private $energy_delta = 0;
    private $attacker_index = 0;
    private $target_index = 0;
    private $active_pokemon_id = 0;
    private $player_joined = null;
    private $battle_results = null;
    private $damage_windows_start_timestamp_ms = 0;
    private $damage_windows_end_timestamp_ms = 0;
    private $player_left = null;
    private $target_pokemon_id = 0;

    public function getType()
    {
        return $this->type;
    }

    public function setType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Battle\BattleActionType::class);
        $this->type = $var;
    }

    public function getActionStartMs()
    {
        return $this->action_start_ms;
    }

    public function setActionStartMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->action_start_ms = $var;
    }

    public function getDurationMs()
    {
        return $this->duration_ms;
    }

    public function setDurationMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->duration_ms = $var;
    }

    public function getEnergyDelta()
    {
        return $this->energy_delta;
    }

    public function setEnergyDelta($var)
    {
        GPBUtil::checkInt32($var);
        $this->energy_delta = $var;
    }

    public function getAttackerIndex()
    {
        return $this->attacker_index;
    }

    public function setAttackerIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->attacker_index = $var;
    }

    public function getTargetIndex()
    {
        return $this->target_index;
    }

    public function setTargetIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_index = $var;
    }

    public function getActivePokemonId()
    {
        return $this->active_pokemon_id;
    }

    public function setActivePokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->active_pokemon_id = $var;
    }

    public function getPlayerJoined()
    {
        return $this->player_joined;
    }

    public function setPlayerJoined(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleParticipant::class);
        $this->player_joined = $var;
    }

    public function getBattleResults()
    {
        return $this->battle_results;
    }

    public function setBattleResults(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleResults::class);
        $this->battle_results = $var;
    }

    public function getDamageWindowsStartTimestampMs()
    {
        return $this->damage_windows_start_timestamp_ms;
    }

    public function setDamageWindowsStartTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->damage_windows_start_timestamp_ms = $var;
    }

    public function getDamageWindowsEndTimestampMs()
    {
        return $this->damage_windows_end_timestamp_ms;
    }

    public function setDamageWindowsEndTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->damage_windows_end_timestamp_ms = $var;
    }

    public function getPlayerLeft()
    {
        return $this->player_left;
    }

    public function setPlayerLeft(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleParticipant::class);
        $this->player_left = $var;
    }

    public function getTargetPokemonId()
    {
        return $this->target_pokemon_id;
    }

    public function setTargetPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->target_pokemon_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0adc050a29504f474f50726f746f732f446174612f426174746c652f4261" .
    "74746c65416374696f6e2e70726f746f1216504f474f50726f746f732e44" .
    "6174612e426174746c651a2a504f474f50726f746f732f446174612f4261" .
    "74746c652f426174746c65526573756c74732e70726f746f1a2d504f474f" .
    "50726f746f732f446174612f426174746c652f426174746c65416374696f" .
    "6e547970652e70726f746f1a2e504f474f50726f746f732f446174612f42" .
    "6174746c652f426174746c655061727469636970616e742e70726f746f22" .
    "83040a0c426174746c65416374696f6e12360a047479706518012001280e" .
    "32282e504f474f50726f746f732e446174612e426174746c652e42617474" .
    "6c65416374696f6e5479706512170a0f616374696f6e5f73746172745f6d" .
    "7318022001280312130a0b6475726174696f6e5f6d731803200128051214" .
    "0a0c656e657267795f64656c746118052001280512160a0e61747461636b" .
    "65725f696e64657818062001280512140a0c7461726765745f696e646578" .
    "18072001280512190a116163746976655f706f6b656d6f6e5f6964180820" .
    "01280612400a0d706c617965725f6a6f696e656418092001280b32292e50" .
    "4f474f50726f746f732e446174612e426174746c652e426174746c655061" .
    "727469636970616e74123d0a0e626174746c655f726573756c7473180a20" .
    "01280b32252e504f474f50726f746f732e446174612e426174746c652e42" .
    "6174746c65526573756c747312290a2164616d6167655f77696e646f7773" .
    "5f73746172745f74696d657374616d705f6d73180b2001280312270a1f64" .
    "616d6167655f77696e646f77735f656e645f74696d657374616d705f6d73" .
    "180c20012803123e0a0b706c617965725f6c656674180d2001280b32292e" .
    "504f474f50726f746f732e446174612e426174746c652e426174746c6550" .
    "61727469636970616e7412190a117461726765745f706f6b656d6f6e5f69" .
    "64180e20012806620670726f746f33"
));

