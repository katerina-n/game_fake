<?php

namespace Map\Game\Builder;

use Map\Game\Collections\Map;
use Map\Game\Components\Base;
use Map\Game\Components\Component;
use Map\Parameters;

class BuildView
{
    /** @var Map */
    private $map;
    /** @var array */
    private $viewMap = [];

    /**
     * BuildView constructor.
     * @param Map $map
     */
    public function __construct(Map $map)
    {
        $this->map = $map;
    }

    /**
     * fill array
     */
    private function tilesList() : void
    {
        $mapHeight = $this->map->getHeight();
        for ($i = 0; $i <= $mapHeight -1 ; $i++) {
            $line = array_fill(0, $this->map->getWidth()-1, Parameters::VIEW_TILE);
            array_push($this->viewMap, $line);
        }
    }

    /**
     * fill array
     */
    private function componentsList() : void
    {
        $components = $this->map->getComponents();
        /** @var Component $component */
        foreach ($components as $component) {
            $componentTile = $component->getTile();
            $this->viewMap[$componentTile->getX()][$componentTile->getY()] = $component->getViewSymbol().$componentTile;
        }
    }

    /**
     * fill array
     */
    private function baseList() : void
    {
        $bases = $this->map->getBases();
        /** @var Base $base */
        foreach ($bases as $base) {
            $baseTile = $base->getComponent()->getTile();
            $this->viewMap[$baseTile->getX()][$baseTile->getY()] = $base->getViewSymbol().$baseTile;
        }
    }

    /**
     * @return array
     */
    public function view() : array
    {
        $this->tilesList();
        $this->componentsList();
        $this->baseList();

        return $this->viewMap;
    }
}