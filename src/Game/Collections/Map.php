<?php

namespace Map\Game\Collections;

use Map\Game\Components\Base;
use Map\Game\Components\Component;
use Map\Game\Components\Mountain;
use Map\Game\Components\Plate;
use Map\Game\Components\Sea;
use Map\Game\Components\Swamp;
use Map\Game\Components\Tile;
use Map\Game\Units\Unit;

class Map
{
    /** @var array  */
    private $tiles = array();
    /** @var array  */
    private $components = array();
    /** @var array  */
    private $bases = array();
    /** @var array  */
    private $units = array();
    /** @var int */
    private $width;
    /** @var int */
    private $height;

    /**
     * Map constructor.
     * @param $width
     * @param $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth() : int
    {
        return $this->width;
    }

    /**
     * @param $width
     * @return Map
     */
    public function setWidth($width): Map
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight() : int
    {
        return $this->height;
    }

    /**
     * @param $height
     * @return Map
     */
    public function setHeight($height): Map
    {
        $this->height = $height;
        return $this;
    }


    /**
     * @param array $tiles
     */
    public function pushTiles(array $tiles)
    {
        /** @var Tile $tile */
        foreach ($tiles as $tile) {
            array_push($this->tiles, $tile);
        }
    }

    /**
     * @param Component $component
     * @throws \Exception
     */
    public function pushComponent(Component $component)
    {
        array_push($this->components,$component);
    }

    /**
     * @param Base $base
     * @throws \Exception
     */
    public function pushBase(Base $base)
    {
        array_push($this->bases,$base);
    }

    /**
     * @param Unit $unit
     */
    public function pushUnit(Unit $unit)
    {
        array_push($this->units, $unit);
    }


    /**
     * @return array
     */
    public function getTiles() : array
    {
        return $this->tiles;
    }

    /**
     * @return array
     */
    public function getComponents() : array
    {
        return $this->components;
    }

    /**
     * @return array
     */
    public function getUnits() : array
    {
        return $this->units;
    }

    /**
     * @param $type
     * @return int
     */
    public function countComponentsType($type) : int
    {
        $count = 0;
        /** @var Component $component */
        foreach ($this->components as $component) {
            if ($component->getType() == $type) {
                $count++;
            }
        }
        return $count;
    }

    /**
     * @param $type
     * @return array
     */
    public function getComponentsByType($type) : array
    {
        $currentComponent = [];

        /** @var Component $component */
        foreach ($this->components as $component) {
            if ($component->getType() == $type) {
                array_push($currentComponent, $component);
            }
        }
        return $currentComponent;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        $tilesCount = count($this->tiles);
        $mountainsCount = $this->countComponentsType(Mountain::class);
        $platesCount = $this->countComponentsType(Plate::class);
        $swampsCount = $this->countComponentsType(Swamp::class);
        $seaCount = $this->countComponentsType(Sea::class);
        $baseCount = count($this->bases);
        $unitCount = count($this->units);

        return "Map is done \n Size : ".$this->getWidth()." x ". $this->getHeight() . " \n Amount of point: ".$tilesCount.
            " \n Amount of Mountains: ".$mountainsCount. " \n Amount of Plates: ".$platesCount.
            " \n Amount of Sea: ".$seaCount. " \n Amount of Swamps: ".$swampsCount.
            " \n Amount of Base: ".$baseCount. " For two teams \n Amount of Units: ".$unitCount.
            " \n Ready to attack! ";
    }

}