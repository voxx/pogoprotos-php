<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/PokemonSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.PokemonSettings</code>
 */
class PokemonSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * <code>float model_scale = 3;</code>
     */
    private $model_scale = 0.0;
    /**
     * <code>.POGOProtos.Enums.PokemonType type = 4;</code>
     */
    private $type = 0;
    /**
     * <code>.POGOProtos.Enums.PokemonType type_2 = 5;</code>
     */
    private $type_2 = 0;
    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.CameraAttributes camera = 6;</code>
     */
    private $camera = null;
    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.EncounterAttributes encounter = 7;</code>
     */
    private $encounter = null;
    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.StatsAttributes stats = 8;</code>
     */
    private $stats = null;
    /**
     * <code>repeated .POGOProtos.Enums.PokemonMove quick_moves = 9;</code>
     */
    private $quick_moves;
    /**
     * <code>repeated .POGOProtos.Enums.PokemonMove cinematic_moves = 10;</code>
     */
    private $cinematic_moves;
    /**
     * <code>repeated float animation_time = 11;</code>
     */
    private $animation_time;
    /**
     * <code>repeated .POGOProtos.Enums.PokemonId evolution_ids = 12;</code>
     */
    private $evolution_ids;
    /**
     * <code>int32 evolution_pips = 13;</code>
     */
    private $evolution_pips = 0;
    /**
     * <code>.POGOProtos.Enums.PokemonRarity rarity = 14;</code>
     */
    private $rarity = 0;
    /**
     * <code>float pokedex_height_m = 15;</code>
     */
    private $pokedex_height_m = 0.0;
    /**
     * <code>float pokedex_weight_kg = 16;</code>
     */
    private $pokedex_weight_kg = 0.0;
    /**
     * <code>.POGOProtos.Enums.PokemonId parent_pokemon_id = 17;</code>
     */
    private $parent_pokemon_id = 0;
    /**
     * <code>float height_std_dev = 18;</code>
     */
    private $height_std_dev = 0.0;
    /**
     * <code>float weight_std_dev = 19;</code>
     */
    private $weight_std_dev = 0.0;
    /**
     * <code>float km_distance_to_hatch = 20;</code>
     */
    private $km_distance_to_hatch = 0.0;
    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_id = 21;</code>
     */
    private $family_id = 0;
    /**
     * <code>int32 candy_to_evolve = 22;</code>
     */
    private $candy_to_evolve = 0;
    /**
     * <code>float km_buddy_distance = 23;</code>
     */
    private $km_buddy_distance = 0.0;
    /**
     * <code>.POGOProtos.Settings.Master.PokemonSettings.BuddySize buddy_size = 24;</code>
     */
    private $buddy_size = 0;
    /**
     * <code>float model_height = 25;</code>
     */
    private $model_height = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\PokemonSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId pokemon_id = 1;</code>
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon_id = $var;
    }

    /**
     * <code>float model_scale = 3;</code>
     */
    public function getModelScale()
    {
        return $this->model_scale;
    }

    /**
     * <code>float model_scale = 3;</code>
     */
    public function setModelScale($var)
    {
        GPBUtil::checkFloat($var);
        $this->model_scale = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonType type = 4;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonType type = 4;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonType::class);
        $this->type = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonType type_2 = 5;</code>
     */
    public function getType2()
    {
        return $this->type_2;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonType type_2 = 5;</code>
     */
    public function setType2($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonType::class);
        $this->type_2 = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.CameraAttributes camera = 6;</code>
     */
    public function getCamera()
    {
        return $this->camera;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.CameraAttributes camera = 6;</code>
     */
    public function setCamera(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Pokemon\CameraAttributes::class);
        $this->camera = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.EncounterAttributes encounter = 7;</code>
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.EncounterAttributes encounter = 7;</code>
     */
    public function setEncounter(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Pokemon\EncounterAttributes::class);
        $this->encounter = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.StatsAttributes stats = 8;</code>
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Pokemon.StatsAttributes stats = 8;</code>
     */
    public function setStats(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Pokemon\StatsAttributes::class);
        $this->stats = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonMove quick_moves = 9;</code>
     */
    public function getQuickMoves()
    {
        return $this->quick_moves;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonMove quick_moves = 9;</code>
     */
    public function setQuickMoves(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\PokemonMove::class);
        $this->quick_moves = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonMove cinematic_moves = 10;</code>
     */
    public function getCinematicMoves()
    {
        return $this->cinematic_moves;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonMove cinematic_moves = 10;</code>
     */
    public function setCinematicMoves(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\PokemonMove::class);
        $this->cinematic_moves = $var;
    }

    /**
     * <code>repeated float animation_time = 11;</code>
     */
    public function getAnimationTime()
    {
        return $this->animation_time;
    }

    /**
     * <code>repeated float animation_time = 11;</code>
     */
    public function setAnimationTime(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->animation_time = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonId evolution_ids = 12;</code>
     */
    public function getEvolutionIds()
    {
        return $this->evolution_ids;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonId evolution_ids = 12;</code>
     */
    public function setEvolutionIds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\PokemonId::class);
        $this->evolution_ids = $var;
    }

    /**
     * <code>int32 evolution_pips = 13;</code>
     */
    public function getEvolutionPips()
    {
        return $this->evolution_pips;
    }

    /**
     * <code>int32 evolution_pips = 13;</code>
     */
    public function setEvolutionPips($var)
    {
        GPBUtil::checkInt32($var);
        $this->evolution_pips = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonRarity rarity = 14;</code>
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonRarity rarity = 14;</code>
     */
    public function setRarity($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonRarity::class);
        $this->rarity = $var;
    }

    /**
     * <code>float pokedex_height_m = 15;</code>
     */
    public function getPokedexHeightM()
    {
        return $this->pokedex_height_m;
    }

    /**
     * <code>float pokedex_height_m = 15;</code>
     */
    public function setPokedexHeightM($var)
    {
        GPBUtil::checkFloat($var);
        $this->pokedex_height_m = $var;
    }

    /**
     * <code>float pokedex_weight_kg = 16;</code>
     */
    public function getPokedexWeightKg()
    {
        return $this->pokedex_weight_kg;
    }

    /**
     * <code>float pokedex_weight_kg = 16;</code>
     */
    public function setPokedexWeightKg($var)
    {
        GPBUtil::checkFloat($var);
        $this->pokedex_weight_kg = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId parent_pokemon_id = 17;</code>
     */
    public function getParentPokemonId()
    {
        return $this->parent_pokemon_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonId parent_pokemon_id = 17;</code>
     */
    public function setParentPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->parent_pokemon_id = $var;
    }

    /**
     * <code>float height_std_dev = 18;</code>
     */
    public function getHeightStdDev()
    {
        return $this->height_std_dev;
    }

    /**
     * <code>float height_std_dev = 18;</code>
     */
    public function setHeightStdDev($var)
    {
        GPBUtil::checkFloat($var);
        $this->height_std_dev = $var;
    }

    /**
     * <code>float weight_std_dev = 19;</code>
     */
    public function getWeightStdDev()
    {
        return $this->weight_std_dev;
    }

    /**
     * <code>float weight_std_dev = 19;</code>
     */
    public function setWeightStdDev($var)
    {
        GPBUtil::checkFloat($var);
        $this->weight_std_dev = $var;
    }

    /**
     * <code>float km_distance_to_hatch = 20;</code>
     */
    public function getKmDistanceToHatch()
    {
        return $this->km_distance_to_hatch;
    }

    /**
     * <code>float km_distance_to_hatch = 20;</code>
     */
    public function setKmDistanceToHatch($var)
    {
        GPBUtil::checkFloat($var);
        $this->km_distance_to_hatch = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_id = 21;</code>
     */
    public function getFamilyId()
    {
        return $this->family_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_id = 21;</code>
     */
    public function setFamilyId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonFamilyId::class);
        $this->family_id = $var;
    }

    /**
     * <code>int32 candy_to_evolve = 22;</code>
     */
    public function getCandyToEvolve()
    {
        return $this->candy_to_evolve;
    }

    /**
     * <code>int32 candy_to_evolve = 22;</code>
     */
    public function setCandyToEvolve($var)
    {
        GPBUtil::checkInt32($var);
        $this->candy_to_evolve = $var;
    }

    /**
     * <code>float km_buddy_distance = 23;</code>
     */
    public function getKmBuddyDistance()
    {
        return $this->km_buddy_distance;
    }

    /**
     * <code>float km_buddy_distance = 23;</code>
     */
    public function setKmBuddyDistance($var)
    {
        GPBUtil::checkFloat($var);
        $this->km_buddy_distance = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.PokemonSettings.BuddySize buddy_size = 24;</code>
     */
    public function getBuddySize()
    {
        return $this->buddy_size;
    }

    /**
     * <code>.POGOProtos.Settings.Master.PokemonSettings.BuddySize buddy_size = 24;</code>
     */
    public function setBuddySize($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Settings\Master\PokemonSettings_BuddySize::class);
        $this->buddy_size = $var;
    }

    /**
     * <code>float model_height = 25;</code>
     */
    public function getModelHeight()
    {
        return $this->model_height;
    }

    /**
     * <code>float model_height = 25;</code>
     */
    public function setModelHeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->model_height = $var;
    }

}

