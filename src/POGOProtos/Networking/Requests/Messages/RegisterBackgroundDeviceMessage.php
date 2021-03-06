<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/RegisterBackgroundDeviceMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.RegisterBackgroundDeviceMessage</code>
 */
class RegisterBackgroundDeviceMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string device_type = 1;</code>
     */
    private $device_type = '';
    /**
     * <code>string device_id = 2;</code>
     */
    private $device_id = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\RegisterBackgroundDeviceMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>string device_type = 1;</code>
     */
    public function getDeviceType()
    {
        return $this->device_type;
    }

    /**
     * <code>string device_type = 1;</code>
     */
    public function setDeviceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_type = $var;
    }

    /**
     * <code>string device_id = 2;</code>
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * <code>string device_id = 2;</code>
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;
    }

}

