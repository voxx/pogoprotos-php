<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/DownloadRemoteConfigVersionMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

require_once('POGOProtos/Enums/Platform.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class DownloadRemoteConfigVersionMessage extends \Google\Protobuf\Internal\Message
{
    private $platform = 0;
    private $device_manufacturer = '';
    private $device_model = '';
    private $locale = '';
    private $app_version = 0;

    public function getPlatform()
    {
        return $this->platform;
    }

    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\Platform::class);
        $this->platform = $var;
    }

    public function getDeviceManufacturer()
    {
        return $this->device_manufacturer;
    }

    public function setDeviceManufacturer($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_manufacturer = $var;
    }

    public function getDeviceModel()
    {
        return $this->device_model;
    }

    public function setDeviceModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_model = $var;
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;
    }

    public function getAppVersion()
    {
        return $this->app_version;
    }

    public function setAppVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->app_version = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad1020a50504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f4d657373616765732f446f776e6c6f616452656d6f746543" .
    "6f6e66696756657273696f6e4d6573736167652e70726f746f1227504f47" .
    "4f50726f746f732e4e6574776f726b696e672e52657175657374732e4d65" .
    "7373616765731a1f504f474f50726f746f732f456e756d732f506c617466" .
    "6f726d2e70726f746f22aa010a22446f776e6c6f616452656d6f7465436f" .
    "6e66696756657273696f6e4d657373616765122c0a08706c6174666f726d" .
    "18012001280e321a2e504f474f50726f746f732e456e756d732e506c6174" .
    "666f726d121b0a136465766963655f6d616e756661637475726572180220" .
    "01280912140a0c6465766963655f6d6f64656c180320012809120e0a066c" .
    "6f63616c6518042001280912130a0b6170705f76657273696f6e18052001" .
    "280d620670726f746f33"
));

