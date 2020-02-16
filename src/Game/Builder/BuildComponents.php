<?php

namespace Map\Game\Builder;

use Map\Game\Abstractions\GenerateComponent;
use Map\Game\Collections\Map;
use Map\Game\Components\Component;
use Map\Game\Components\Plate;
use Map\Game\Components\Tile;
use Map\Game\Generators\GenerateMountain;
use Map\Game\Generators\GeneratePlate;
use Map\Game\Generators\GenerateSea;
use Map\Game\Generators\GenerateSwamp;

class BuildComponents
{
    private $generatorArray = [GenerateMountain::class, GeneratePlate::class, GenerateSea::class, GenerateSwamp::class];

    /**
     * @param Map $map
     * @return Map
     * @throws \Exception
     */
    public function buildComponents(Map $map) : Map
    {
        $tiles = $map->getTiles();

        shuffle($tiles);

        /** @var Tile $tile */
        foreach ($tiles as $key => $tile) {
            if ($map->countComponentsType(Plate::class) < 2) {
                $componentGenerator = new GeneratePlate();
            } else {
                $randComponentKey = array_rand($this->generatorArray);
                /** @var GenerateComponent $componentGenerator */
                $componentGenerator = new $this->generatorArray[$randComponentKey];
            }
            /** @var Component $component */
            $component = $componentGenerator->generateOnTile($tile);
            $map->pushComponent($component);
        }

        return $map;
    }
}