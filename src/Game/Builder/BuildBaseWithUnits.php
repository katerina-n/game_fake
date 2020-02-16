<?php

namespace Map\Game\Builder;

use Map\Game\Collections\Map;
use Map\Game\Components\Base;
use Map\Game\Components\Plate;
use Map\Game\Generators\GenerateAirCraft;
use Map\Game\Generators\GenerateBase;
use Map\Game\Generators\GenerateTank;
use Map\Game\Generators\GenerateWarrior;
use Map\Game\Units\Unit;
use Map\Parameters;

class BuildBaseWithUnits
{
    /** @var GenerateBase  */
    private $baseGenerator;
    /** @var GenerateWarrior  */
    private $warriorsGenerator;
    /** @var GenerateAirCraft  */
    private $airGenerator;
    /** @var GenerateTank  */
    private $tankGenerator;
    /** @var Plate */
    private $plate;
    /** @var int */
    private $team;


    /**
     * BuildBaseWithUnits constructor.
     */
    public function __construct()
    {
        $this->baseGenerator = new GenerateBase();
        $this->warriorsGenerator = new GenerateWarrior();
        $this->airGenerator = new GenerateAirCraft();
        $this->tankGenerator = new GenerateTank();
    }

    /**
     * @return \Map\Game\Components\Base
     */
    private function base() : Base
    {
        $base = $this->baseGenerator->generateOnComponent($this->plate, $this->team);

        return $base;
    }

    /**
     * @return array
     */
    private function warriors() : array
    {
        $warrior = $this->warriorsGenerator->generateOnComponent($this->plate, $this->team);
        $warriors = array_fill(0, Parameters::WARRIORS_COUNT, $warrior);
        return $warriors;
    }

    /**
     * @return array
     */
    private function airCrafts() : array
    {
        $airCraft = $this->airGenerator->generateOnComponent($this->plate, $this->team);
        $airCrafts = array_fill(0, Parameters::AIR_CRAFTS_COUNT, $airCraft);
        return $airCrafts;
    }

    /**
     * @return array
     */
    private function tanks() : array
    {
        $tank = $this->tankGenerator->generateOnComponent($this->plate, $this->team);
        $tanks = array_fill(0, Parameters::TANKS_COUNT, $tank);
        return $tanks;
    }

    /**
     * @param Map $map
     * @param Plate $plate
     * @param $team
     * @return Map
     * @throws \Exception
     */
    public function buildBaseWithUnits(Map $map, Plate $plate, $team) : Map
    {
        $this->plate = $plate;
        $this->team = $team;

        $base = $this->base();
        $warriors = $this->warriors();
        $airCrafts = $this->airCrafts();
        $tanks = $this->tanks();
        $units = array_merge($warriors, $airCrafts, $tanks);
        $map->pushBase($base);
        /** @var Unit $unit */
        foreach ($units as $unit) {
            $map->pushUnit($unit);
        }
        return $map;
    }
}
