<?php

namespace Map\Game\Abstractions;

use Map\Game\Components\Component;
use Map\Game\Components\Tile;

abstract class GenerateComponent
{
    abstract function makeComponent() : Component;

    /**
     * @param Tile $tile
     * @return Component
     */
    public function generateOnTile(Tile $tile) : Component
    {
        $component = $this->makeComponent();
        $component->setTile($tile);
        $component->setType(get_class($component));
        return $component;
    }
}