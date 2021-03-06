<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Pokemon/EncounterAttributes.proto

namespace POGOProtos\Settings\Master\Pokemon;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.Pokemon.EncounterAttributes</code>
 */
class EncounterAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>float base_capture_rate = 1;</code>
     */
    private $base_capture_rate = 0.0;
    /**
     * <code>float base_flee_rate = 2;</code>
     */
    private $base_flee_rate = 0.0;
    /**
     * <code>float collision_radius_m = 3;</code>
     */
    private $collision_radius_m = 0.0;
    /**
     * <code>float collision_height_m = 4;</code>
     */
    private $collision_height_m = 0.0;
    /**
     * <code>float collision_head_radius_m = 5;</code>
     */
    private $collision_head_radius_m = 0.0;
    /**
     * <code>.POGOProtos.Enums.PokemonMovementType movement_type = 6;</code>
     */
    private $movement_type = 0;
    /**
     * <code>float movement_timer_s = 7;</code>
     */
    private $movement_timer_s = 0.0;
    /**
     * <code>float jump_time_s = 8;</code>
     */
    private $jump_time_s = 0.0;
    /**
     * <code>float attack_timer_s = 9;</code>
     */
    private $attack_timer_s = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\Pokemon\EncounterAttributes::initOnce();
        parent::__construct();
    }

    /**
     * <code>float base_capture_rate = 1;</code>
     */
    public function getBaseCaptureRate()
    {
        return $this->base_capture_rate;
    }

    /**
     * <code>float base_capture_rate = 1;</code>
     */
    public function setBaseCaptureRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->base_capture_rate = $var;
    }

    /**
     * <code>float base_flee_rate = 2;</code>
     */
    public function getBaseFleeRate()
    {
        return $this->base_flee_rate;
    }

    /**
     * <code>float base_flee_rate = 2;</code>
     */
    public function setBaseFleeRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->base_flee_rate = $var;
    }

    /**
     * <code>float collision_radius_m = 3;</code>
     */
    public function getCollisionRadiusM()
    {
        return $this->collision_radius_m;
    }

    /**
     * <code>float collision_radius_m = 3;</code>
     */
    public function setCollisionRadiusM($var)
    {
        GPBUtil::checkFloat($var);
        $this->collision_radius_m = $var;
    }

    /**
     * <code>float collision_height_m = 4;</code>
     */
    public function getCollisionHeightM()
    {
        return $this->collision_height_m;
    }

    /**
     * <code>float collision_height_m = 4;</code>
     */
    public function setCollisionHeightM($var)
    {
        GPBUtil::checkFloat($var);
        $this->collision_height_m = $var;
    }

    /**
     * <code>float collision_head_radius_m = 5;</code>
     */
    public function getCollisionHeadRadiusM()
    {
        return $this->collision_head_radius_m;
    }

    /**
     * <code>float collision_head_radius_m = 5;</code>
     */
    public function setCollisionHeadRadiusM($var)
    {
        GPBUtil::checkFloat($var);
        $this->collision_head_radius_m = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonMovementType movement_type = 6;</code>
     */
    public function getMovementType()
    {
        return $this->movement_type;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonMovementType movement_type = 6;</code>
     */
    public function setMovementType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonMovementType::class);
        $this->movement_type = $var;
    }

    /**
     * <code>float movement_timer_s = 7;</code>
     */
    public function getMovementTimerS()
    {
        return $this->movement_timer_s;
    }

    /**
     * <code>float movement_timer_s = 7;</code>
     */
    public function setMovementTimerS($var)
    {
        GPBUtil::checkFloat($var);
        $this->movement_timer_s = $var;
    }

    /**
     * <code>float jump_time_s = 8;</code>
     */
    public function getJumpTimeS()
    {
        return $this->jump_time_s;
    }

    /**
     * <code>float jump_time_s = 8;</code>
     */
    public function setJumpTimeS($var)
    {
        GPBUtil::checkFloat($var);
        $this->jump_time_s = $var;
    }

    /**
     * <code>float attack_timer_s = 9;</code>
     */
    public function getAttackTimerS()
    {
        return $this->attack_timer_s;
    }

    /**
     * <code>float attack_timer_s = 9;</code>
     */
    public function setAttackTimerS($var)
    {
        GPBUtil::checkFloat($var);
        $this->attack_timer_s = $var;
    }

}

