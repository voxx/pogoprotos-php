<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetHatchedEggsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetHatchedEggsResponse</code>
 */
class GetHatchedEggsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool success = 1;</code>
     */
    private $success = false;
    /**
     * <code>repeated fixed64 pokemon_id = 2 [packed = true];</code>
     */
    private $pokemon_id;
    /**
     * <code>repeated int32 experience_awarded = 3;</code>
     */
    private $experience_awarded;
    /**
     * <code>repeated int32 candy_awarded = 4;</code>
     */
    private $candy_awarded;
    /**
     * <code>repeated int32 stardust_awarded = 5;</code>
     */
    private $stardust_awarded;
    /**
     * <code>repeated float egg_km_walked = 6;</code>
     */
    private $egg_km_walked;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\GetHatchedEggsResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool success = 1;</code>
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * <code>bool success = 1;</code>
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;
    }

    /**
     * <code>repeated fixed64 pokemon_id = 2 [packed = true];</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <code>repeated fixed64 pokemon_id = 2 [packed = true];</code>
     */
    public function setPokemonId(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->pokemon_id = $var;
    }

    /**
     * <code>repeated int32 experience_awarded = 3;</code>
     */
    public function getExperienceAwarded()
    {
        return $this->experience_awarded;
    }

    /**
     * <code>repeated int32 experience_awarded = 3;</code>
     */
    public function setExperienceAwarded(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->experience_awarded = $var;
    }

    /**
     * <code>repeated int32 candy_awarded = 4;</code>
     */
    public function getCandyAwarded()
    {
        return $this->candy_awarded;
    }

    /**
     * <code>repeated int32 candy_awarded = 4;</code>
     */
    public function setCandyAwarded(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->candy_awarded = $var;
    }

    /**
     * <code>repeated int32 stardust_awarded = 5;</code>
     */
    public function getStardustAwarded()
    {
        return $this->stardust_awarded;
    }

    /**
     * <code>repeated int32 stardust_awarded = 5;</code>
     */
    public function setStardustAwarded(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->stardust_awarded = $var;
    }

    /**
     * <code>repeated float egg_km_walked = 6;</code>
     */
    public function getEggKmWalked()
    {
        return $this->egg_km_walked;
    }

    /**
     * <code>repeated float egg_km_walked = 6;</code>
     */
    public function setEggKmWalked(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->egg_km_walked = $var;
    }

}

