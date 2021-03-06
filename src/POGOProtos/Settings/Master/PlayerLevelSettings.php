<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/PlayerLevelSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.PlayerLevelSettings</code>
 */
class PlayerLevelSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated int32 rank_num = 1;</code>
     */
    private $rank_num;
    /**
     * <code>repeated int32 required_experience = 2;</code>
     */
    private $required_experience;
    /**
     * <code>repeated float cp_multiplier = 3;</code>
     */
    private $cp_multiplier;
    /**
     * <code>int32 max_egg_player_level = 4;</code>
     */
    private $max_egg_player_level = 0;
    /**
     * <code>int32 max_encounter_player_level = 5;</code>
     */
    private $max_encounter_player_level = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\PlayerLevelSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated int32 rank_num = 1;</code>
     */
    public function getRankNum()
    {
        return $this->rank_num;
    }

    /**
     * <code>repeated int32 rank_num = 1;</code>
     */
    public function setRankNum(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->rank_num = $var;
    }

    /**
     * <code>repeated int32 required_experience = 2;</code>
     */
    public function getRequiredExperience()
    {
        return $this->required_experience;
    }

    /**
     * <code>repeated int32 required_experience = 2;</code>
     */
    public function setRequiredExperience(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->required_experience = $var;
    }

    /**
     * <code>repeated float cp_multiplier = 3;</code>
     */
    public function getCpMultiplier()
    {
        return $this->cp_multiplier;
    }

    /**
     * <code>repeated float cp_multiplier = 3;</code>
     */
    public function setCpMultiplier(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->cp_multiplier = $var;
    }

    /**
     * <code>int32 max_egg_player_level = 4;</code>
     */
    public function getMaxEggPlayerLevel()
    {
        return $this->max_egg_player_level;
    }

    /**
     * <code>int32 max_egg_player_level = 4;</code>
     */
    public function setMaxEggPlayerLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_egg_player_level = $var;
    }

    /**
     * <code>int32 max_encounter_player_level = 5;</code>
     */
    public function getMaxEncounterPlayerLevel()
    {
        return $this->max_encounter_player_level;
    }

    /**
     * <code>int32 max_encounter_player_level = 5;</code>
     */
    public function setMaxEncounterPlayerLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_encounter_player_level = $var;
    }

}

