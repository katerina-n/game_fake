<?php

namespace Map\Game\Generators;

use Map\Game\Collections\Map;
use Map\Game\Components\Tile;

class GenerateTiles
{
    /** @var int */
    private $widthMap;
    /** @var int */
    private $heightMap;

    /**
     * @param $x
     * @param $y
     * @return Tile
     */
    private function makeTile($x, $y) : Tile
    {
        return new Tile($x, $y);
    }

    /**
     * @param Map $map
     * @return array
     */
    public function generateOnMap(Map $map) : array
    {
        $this->widthMap = $map->getWidth();
        $this->heightMap = $map->getHeight();

        $tiles = $this->tilesArray();
        return $tiles;
    }

    /**
     * @return array
     */
    private function tilesArray() : array
    {
        $tilesArray = [];
        for ($i = 0; $i <= $this->heightMap - 1; $i++ ) {
            for ($j = 0; $j <= $this->widthMap - 1; $j++) {
                $tilesArray [] = $this->makeTile($i, $j);
            }
        }
        return $tilesArray;
    }

}