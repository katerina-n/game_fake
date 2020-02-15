<?php

namespace Map\Game\Abstractions;

use Map\Game\Collections\Map;
use Map\Game\Components\Component;

abstract class GenerateComponent
{
    /** @var Map */
    private $map;

    abstract function makeComponent() : Component;

    /**
     * @param Map $map
     * @return Component
     */
    public function generateOnMap(Map $map)
    {
        $this->map = $map;
        $position = $this->position();
        $component = $this->makeComponent();
        $component->setTile($position['x'], $position['y'], get_class($component));
        return $component;
    }

    /**
     * @return array
     */
    private function position()
    {
        $randX = rand(Map::MIN, Map::MAX);
        $randY = rand(Map::MIN, Map::MAX);

        if (!$this->map->isFreePosition($randX, $randY)) {
            $this->position();
        }

        return [
            'x' => $randX,
            'y' => $randY
        ];

    }

}