<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/Quest.proto

namespace POGOProtos\Data\Quests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Quests.Quest</code>
 */
class Quest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Enums.QuestType quest_type = 1;</code>
     */
    private $quest_type = 0;
    /**
     * <code>.POGOProtos.Data.Quests.DailyQuest daily_quest = 2;</code>
     */
    private $daily_quest = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Quests\Quest::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Enums.QuestType quest_type = 1;</code>
     */
    public function getQuestType()
    {
        return $this->quest_type;
    }

    /**
     * <code>.POGOProtos.Enums.QuestType quest_type = 1;</code>
     */
    public function setQuestType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\QuestType::class);
        $this->quest_type = $var;
    }

    /**
     * <code>.POGOProtos.Data.Quests.DailyQuest daily_quest = 2;</code>
     */
    public function getDailyQuest()
    {
        return $this->daily_quest;
    }

    /**
     * <code>.POGOProtos.Data.Quests.DailyQuest daily_quest = 2;</code>
     */
    public function setDailyQuest(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\DailyQuest::class);
        $this->daily_quest = $var;
    }

}

