<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/CheckChallenge.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.CheckChallengeMessage</code>
 */
class CheckChallengeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool debug_request = 1;</code>
     */
    private $debug_request = false;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\CheckChallenge::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool debug_request = 1;</code>
     */
    public function getDebugRequest()
    {
        return $this->debug_request;
    }

    /**
     * <code>bool debug_request = 1;</code>
     */
    public function setDebugRequest($var)
    {
        GPBUtil::checkBool($var);
        $this->debug_request = $var;
    }

}
