<?php

namespace Map\Game\Abstractions;

use Map\Game\Collections\Map;
use Map\Game\Components\Base;
use Map\Game\Components\Component;
use Map\Game\Components\Tile;

abstract class GenerateBuilder
{
    private $map;

    abstract function makeBase() : Base;


    public function generateOnComponent(Map $map)
    {
        $base = $this->makeBase();
        $this->map = $map;


        return $base;
    }

    /**
     *
     */
    private function getPoint()
    {
        /** @var Tile $tile */
        foreach ($this->map as $key => $tile) {
            $tileType = $tile->getType();
            /** @var Component $component */
            $component = new $tileType;
            if ($component->isAccessebleForUnit()) {
                ///
            }
        }
    }

}