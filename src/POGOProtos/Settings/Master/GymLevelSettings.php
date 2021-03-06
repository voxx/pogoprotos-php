<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/GymLevelSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.GymLevelSettings</code>
 */
class GymLevelSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated int32 required_experience = 1;</code>
     */
    private $required_experience;
    /**
     * <code>repeated int32 leader_slots = 2;</code>
     */
    private $leader_slots;
    /**
     * <code>repeated int32 trainer_slots = 3;</code>
     */
    private $trainer_slots;
    /**
     * <code>repeated int32 search_roll_bonus = 4;</code>
     */
    private $search_roll_bonus;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\GymLevelSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated int32 required_experience = 1;</code>
     */
    public function getRequiredExperience()
    {
        return $this->required_experience;
    }

    /**
     * <code>repeated int32 required_experience = 1;</code>
     */
    public function setRequiredExperience(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->required_experience = $var;
    }

    /**
     * <code>repeated int32 leader_slots = 2;</code>
     */
    public function getLeaderSlots()
    {
        return $this->leader_slots;
    }

    /**
     * <code>repeated int32 leader_slots = 2;</code>
     */
    public function setLeaderSlots(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->leader_slots = $var;
    }

    /**
     * <code>repeated int32 trainer_slots = 3;</code>
     */
    public function getTrainerSlots()
    {
        return $this->trainer_slots;
    }

    /**
     * <code>repeated int32 trainer_slots = 3;</code>
     */
    public function setTrainerSlots(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->trainer_slots = $var;
    }

    /**
     * <code>repeated int32 search_roll_bonus = 4;</code>
     */
    public function getSearchRollBonus()
    {
        return $this->search_roll_bonus;
    }

    /**
     * <code>repeated int32 search_roll_bonus = 4;</code>
     */
    public function setSearchRollBonus(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->search_roll_bonus = $var;
    }

}

